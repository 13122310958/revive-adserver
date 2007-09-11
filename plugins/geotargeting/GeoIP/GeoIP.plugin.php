<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                                              |
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

require_once(MAX_PATH . '/plugins/geotargeting/Geotargeting.php');
require_once(MAX_PATH . '/plugins/geotargeting/GeoIP/GeoIP.delivery.php');

/**
 * Class to get GeoTargeting information directly from the MaxMind LLC
 * database file, without having it accessed via the C/mod_apache
 * interface.
 *
 * @package    OpenadsPlugin
 * @subpackage Geotargeting
 * @author     Andrew Hill <andrew@m3.net>
 * @author     Radek Maciaszek <radek@m3.net>
 * @static
 */
class Plugins_Geotargeting_GeoIP_GeoIP extends Plugins_Geotargeting
{

    /**
     * Return plugin name
     *
     * @return string A string describing the class.
     */
    function getModuleInfo()
    {
        return 'MaxMind GeoIP';
    }

    /**
     * The method calls to the delivery half of the plugin to get the
     * geo information
     *
     * @return array An array that will contain the results of the
     *               GeoTargeting lookup.
     */
    function getInfo()
    {
        return MAX_Geo_GeoIP_getInfo();
    }
}

?>