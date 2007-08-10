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
$Id:report-specifics.php 4488 2006-03-22 16:32:06Z roh@m3.net $
*/

// Require the initialisation file
require_once '../../init.php';

// Include required files
require_once MAX_PATH . '/lib/OA/Admin/Reports/Index.php';

// Register input variables
phpAds_registerGlobal ('selection');

// Security check
phpAds_checkAccess(phpAds_Admin + phpAds_Agency + phpAds_Client + phpAds_Affiliate);

// Load the required language files
Language_Report::load();

/*-------------------------------------------------------*/
/* HTML framework                                        */
/*-------------------------------------------------------*/

phpAds_PageHeader("3");

/*-------------------------------------------------------*/
/* Main code                                             */
/*-------------------------------------------------------*/
$oModule = new OA_Admin_Reports_Index();
$oModule->displayReportGeneration($selection);

/*-------------------------------------------------------*/
/* HTML framework                                        */
/*-------------------------------------------------------*/

phpAds_PageFooter();

?>