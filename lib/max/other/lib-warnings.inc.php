<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| Copyright (c) 2000-2003 the phpAdsNew developers                          |
| For contact details, see: http://www.phpadsnew.com/                       |
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

require_once MAX_PATH . '/lib/OA/Email.php';
require_once MAX_PATH . '/lib/OA/Admin/Preferences.php';

/*-------------------------------------------------------*/
/* Mail warning - preset is reached						 */
/*-------------------------------------------------------*/

function phpAds_warningMail($campaign)
{
    $oDbh =& OA_DB::singleton();
	$conf = $GLOBALS['_MAX']['CONF'];
	global $strImpressionsClicksConversionsLow, $strMailHeader, $strWarnClientTxt;
	global $strMailNothingLeft, $strMailFooter;
	if ($pref['warn_admin'] || $pref['warn_client']) {
		// Get the client which belongs to this campaign
        $query = "
			SELECT *
			FROM ".$conf['table']['prefix'].$conf['table']['clients'] ."
			WHERE clientid=". $oDbh->quote($campaign['clientid'], 'integer');
        $res = $oDbh->query($query);
		if ($client = $res->fetchRow()) {
            // Load config from the database
            if (!isset($GLOBALS['_MAX']['PREF'])) {
                //phpAds_LoadDbConfig();
                $pref = OA_Admin_Preferences::loadPrefs();
            } else {
	           $pref = $GLOBALS['_MAX']['PREF'];
            }
            // Required files
            include_once MAX_PATH . '/lib/max/language/Default.php';
            // Load the required language files
            Language_Default::load();
			// Build email
			$Subject = $strImpressionsClicksConversionsLow.": ".$campaign['campaignname'];
			$Body    = "$strMailHeader\n";
			$Body 	.= "$strWarnClientTxt\n";
			$Body 	.= "$strMailNothingLeft\n\n";
			$Body   .= "$strMailFooter";
			$Body    = str_replace("{clientname}", $campaign['campaignname'], $Body);
			$Body	 = str_replace("{contact}", $client["contact"], $Body);
			$Body    = str_replace("{adminfullname}", $pref['admin_fullname'], $Body);
			$Body    = str_replace("{limit}", $pref['warn_limit'], $Body);
			// Send email
			if ($pref['warn_admin']) {
				OA_Email::sendMail($Subject, $Body, $pref['admin_email'], $pref['admin_fullname']);
			}
			if ($pref['warn_client'] && $client["email"] != '') {
				OA_Email::sendMail($Subject, $Body, $client['email'], $client['contact']);
				if ($pref['userlog_email']) {
					phpAds_userlogAdd(phpAds_actionWarningMailed, $campaign['campaignid'], $Subject."\n\n".$Body);
				}
			}
		}
	}
}

?>