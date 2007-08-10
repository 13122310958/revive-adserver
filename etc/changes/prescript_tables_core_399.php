<?php

/*
+---------------------------------------------------------------------------+
| Openads v2.3                                                              |
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
$Id: StatMigration.php 7557 2007-06-18 13:03:08Z matteo.beccati@openads.org $
*/

require_once MAX_PATH . '/etc/changes/StatMigration.php';
require_once(MAX_PATH . '/lib/OA/Upgrade/phpAdsNew.php');
require_once(MAX_PATH . '/lib/OA/DB/Sql.php');

class prescript_tables_core_399
{
    function prescript_tables_core_399()
    {

    }

    function execute_constructive($aParams)
    {
        $oDBUpgrader = $aParams[0];

        $migration = new StatMigration();
	    $migration->compactStats = true;

	    $migration->init($oDBUpgrader->oSchema->db);

		return $migration->migrateData();
    }

    function execute_destructive($aParams)
    {
        return true;
    }
}

?>