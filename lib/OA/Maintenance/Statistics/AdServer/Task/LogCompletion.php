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

require_once MAX_PATH . '/lib/OA/Maintenance/Statistics/Common/Task/LogCompletion.php';

/**
 * A class for logging the completion of the maintenance statistics process
 * for the AdServer module.
 *
 * @package    OpenadsMaintenance
 * @subpackage Statistics
 * @author     Andrew Hill <andrew.hill@openads.org>
 */
class OA_Maintenance_Statistics_AdServer_Task_LogCompletion extends OA_Maintenance_Statistics_Common_Task_LogCompletion
{

    /**
     * The constructor method.
     *
     * @return OA_Maintenance_Statistics_AdServer_Task_LogCompletion
     */
    function OA_Maintenance_Statistics_AdServer_Task_LogCompletion()
    {
        parent::OA_Maintenance_Statistics_Common_Task_LogCompletion();
    }

    /**
     * The implementation of the OA_Task::run() method that performs
     * the task of this class.
     *
     * @param PEAR::Date $oEndDate Optional date/time representing the end of the tasks.
     */
    function run($oEndDate = null)
    {
        $this->logCompletion('adserver_run_type', $oEndDate);
    }

}

?>
