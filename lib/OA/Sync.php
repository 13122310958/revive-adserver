<?php

/*
+---------------------------------------------------------------------------+
| Openads v2.5                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

require_once MAX_PATH . '/lib/OA.php';
require_once MAX_PATH . '/lib/OA/DB.php';
require_once MAX_PATH . '/lib/OA/Dal/ApplicationVariables.php';
require_once 'XML/RPC.php';

/**
 * A class to deal with the services provided by Openads Sync
 *
 * @package    Openads
 * @author     Matteo Beccati <matteo@beccati.com>
 */
class OA_Sync
{
    var $conf;
    var $pref;
    var $oDbh;

    var $_openadsServer;

    /**
     * Constructor
     *
     * @param array $conf array, if null reads the global variable
     * @param array $pref array, if null reads the global variable
     */
    function OA_Sync($conf = null, $pref = null)
    {
        $this->conf = is_null($conf) ? $GLOBALS['_MAX']['CONF'] : $conf;
        $this->pref = is_null($pref) ? $GLOBALS['_MAX']['PREF'] : $pref;
        $this->_openadsServer = $GLOBALS['_MAX']['CONF']['sync'];

        $this->oDbh = &OA_DB::singleton();
    }


    /**
     * Returns phpAdsNew style config version.
     *
     * The Openads version "number" is converted to an int using the following table:
     *
     * 'beta-rc' => 0.1
     * 'beta'    => 0.2
     * 'rc'      => 0.3
     * ''        => 0.4
     *
     * i.e.
     * v0.3.29-beta-rc10 becomes:
     *  0   *   1000 +
     *  3   *    100 +
     * 29   *      1 +    // Cannot exceed 100 patch releases!
     *  0.1          +
     * 10   /   1000 =
     * -------------
     *        3293.1
     */
    function getConfigVersion($version)
    {
        $a = array(
            'dev'     => -0.001,
            'beta-rc' => 0.1,
            'beta'    => 0.2,
            'rc'      => 0.3,
            'stable'  => 0.4
        );

        $version = OA::stripVersion($version, array('dev', 'stable'));

        if (preg_match('/^v/', $version)) {
            $v = preg_split('/[.-]/', substr($version, 1));
        } else {
            $v = preg_split('/[.-]/', $version);
        }

        if (count($v) < 3) {
            return false;
        }

        // Prepare value from the first 3 items
        $returnValue = $v[0] * 1000 + $v[1] * 100 + $v[2];

        // How many items were there?
        if (count($v) == 5) {
            // Check that it is a beta-rc release
            if ((!$v[3] == 'beta') || (!preg_match('/^rc(\d+)/', $v[4], $aMatches))) {
                return false;
            }
            // Add the beta-rc
            $returnValue += $a['beta-rc'] + $aMatches[1] / 1000;
            return $returnValue;
        } else if (count($v) == 4) {
            // Check that it is a tag or rc numer
            if (isset($a[$v[3]])) {
                // Add the beta
                $returnValue += $a[$v[3]];
                return $returnValue;
            } else if (preg_match('/^rc(\d+)/', $v[3], $aMatches)) {
                // Add the rc
                $returnValue += $a['rc'] + $aMatches[1] / 1000;
                return $returnValue;
            }
            return false;
        }
        // Stable release
        $returnValue += $a['stable'];
        return $returnValue;
    }

    /**
     * Connect to Openads Sync to check for updates
     *
     * @param float Only check for updates newer than this value
     * @param bool Send software details
     * @return array Two items:
     *               Item 0 is the XML-RPC error code (special meanings: 0 - no error, 800 - No updates)
     *               Item 1 is either the error message (item 1 != 0), or an array containing update info
     */
    function checkForUpdates($already_seen = 0, $send_sw_data = true)
    {
        global $XML_RPC_erruser;

        // Create client object
        $client = new XML_RPC_Client($this->_openadsServer['script'],
            $this->_openadsServer['host'], $this->_openadsServer['port']);

        $params = array(
            new XML_RPC_Value('Openads', 'string'),
            new XML_RPC_Value($this->getConfigVersion(OA_VERSION), 'string'),
            new XML_RPC_Value($already_seen, 'string'),
            new XML_RPC_Value('', 'string'),
            new XML_RPC_Value(OA_Dal_ApplicationVariables::get('platform_hash'), 'string')
        );

        if ($send_sw_data) {
            // Prepare software data
            $params[] = XML_RPC_Encode(array(
                'os_type'                    => php_uname('s'),
                'os_version'                => php_uname('r'),

                'webserver_type'            => isset($_SERVER['SERVER_SOFTWARE']) ? preg_replace('#^(.*?)/.*$#', '$1', $_SERVER['SERVER_SOFTWARE']) : '',
                'webserver_version'            => isset($_SERVER['SERVER_SOFTWARE']) ? preg_replace('#^.*?/(.*?)(?: .*)?$#', '$1', $_SERVER['SERVER_SOFTWARE']) : '',

                'db_type'                    => phpAds_dbmsname,
                'db_version'                => $this->oDbh->queryOne("SELECT VERSION()"),

                'php_version'                => phpversion(),
                'php_sapi'                    => ucfirst(php_sapi_name()),
                'php_extensions'            => get_loaded_extensions(),
                'php_register_globals'        => (bool)ini_get('register_globals'),
                'php_magic_quotes_gpc'        => (bool)ini_get('magic_quotes_gpc'),
                'php_safe_mode'                => (bool)ini_get('safe_mode'),
                'php_open_basedir'            => (bool)strlen(ini_get('open_basedir')),
                'php_upload_tmp_readable'    => (bool)is_readable(ini_get('upload_tmp_dir').DIRECTORY_SEPARATOR),
            ));
        }

        // Create XML-RPC request message
        $msg = new XML_RPC_Message("Openads.Sync", $params);

        // Send XML-RPC request message
        if($response = $client->send($msg, 10)) {
            // XML-RPC server found, now checking for errors
            if (!$response->faultCode()) {
                $ret = array(0, XML_RPC_Decode($response->value()));

                // Prepare cache
                $cache = $ret[1];
            } else {
                $ret = array($response->faultCode(), $response->faultString());

                // Prepare cache
                $cache = false;
            }

            // prepare update query
            $sUpdate = "
                UPDATE
                    ".$this->conf['table']['prefix'].$this->conf['table']['preference']."
                SET
                    updates_cache = '".addslashes(serialize($cache))."',
                    updates_timestamp = ".time()."
            ";

            $sUpdate .="
                WHERE
                    agencyid = 0
            ";

            $this->oDbh->exec($sUpdate);

            return $ret;
        }

        return array(-1, 'No response from the server');
    }
}

?>