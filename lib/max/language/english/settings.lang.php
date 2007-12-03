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

/**
 * A file for holding the "settings" English translation information.
 *
 * @package    MaxUI
 * @subpackage Languages
 */

// Installer translation strings
$GLOBALS['strInstall']                      = "Install";
$GLOBALS['strChooseInstallLanguage']        = "Choose language for the installation procedure";
$GLOBALS['strLanguageSelection']            = "Language Selection";
$GLOBALS['strDatabaseSettings']             = "Database Settings";
$GLOBALS['strAdminSettings']                = "Administrator Settings";
$GLOBALS['strAdminAccount']                 = "Administrator Account";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Advanced Settings";
$GLOBALS['strOtherSettings']                = "Other settings";
$GLOBALS['strSpecifySyncSettings']          = "Synchronisation settings";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strOpenadsIdYour']                = "Your Openads ID";
$GLOBALS['strOpenadsIdSettings']            = "Openads ID Settings";
$GLOBALS['strWarning']                      = "Warning";
$GLOBALS['strFatalError']                   = "A fatal error occurred";
$GLOBALS['strUpdateError']                  = "An error occured while updating";
$GLOBALS['strBtnContinue']                  = "Continue &raquo;";
$GLOBALS['strBtnRecover']                   = "Recover &raquo;";
$GLOBALS['strBtnStartAgain']                   = "Start Upgrade Again &raquo;";
$GLOBALS['strBtnGoBack']                    = "&laquo; Go Back";
$GLOBALS['strBtnAgree']                     = "I Agree &raquo;";
$GLOBALS['strBtnDontAgree']                 = "&laquo; I Don't Agree";
$GLOBALS['strBtnRetry']                     = "Retry";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = MAX_PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Could not connect to database, please recheck the settings you specified";
$GLOBALS['strCreateTableTestFailed']        = "The user you specified doesn't have permission to create or update the database structure, please contact the database administrator.";
$GLOBALS['strUpdateTableTestFailed']        = "The user you specified doesn't have permission to update the database structure, please contact the database administrator.";
$GLOBALS['strTablePrefixInvalid']           = "Table prefix contains invalid characters";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".MAX_PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = MAX_PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Before you continue, please correct these potential problems:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Ignore warnings";
$GLOBALS['strFixErrorsBeforeContinuing']    = "Please fix all errors before continuing.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = MAX_PRODUCT_NAME." requires PHP 4.3.6 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "The PHP configuration variable register_globals needs to be turned on.";
$GLOBALS['strWarningRegisterArgcArv']       = "The PHP configuration variable register_argc_argv needs to be turned on to run maintenance from the command line.";
$GLOBALS['strWarningMagicQuotesGPC']        = "The PHP configuration variable magic_quotes_gpc needs to be turned on.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "The PHP configuration variable magic_quotes_runtime needs to be turned off.";
$GLOBALS['strWarningFileUploads']           = "The PHP configuration variable file_uploads needs to be turned on.";
$GLOBALS['strWarningTrackVars']             = "The PHP configuration variable track_vars needs to be turned on.";
$GLOBALS['strWarningPREG']                  = "The version of PHP you are using doesn't have support for PERL compatible regular expressions. You need to enable the PREG extension before you can proceed.";
$GLOBALS['strConfigLockedDetected']         = MAX_PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "It is currently not possible to update the database. If you decide to proceed, all existing banners, statistics and advertisers will be deleted.";
$GLOBALS['strIgnoreErrors']                 = "Ignore errors";
$GLOBALS['strRetryUpdate']                  = "Retry updating";
$GLOBALS['strTableNames']                   = "Table Names";
$GLOBALS['strTablesPrefix']                 = "Table names prefix";
$GLOBALS['strTablesType']                   = "Table type";

$GLOBALS['strInstallWelcome']               = "Welcome to ".MAX_PRODUCT_NAME;
$GLOBALS['strInstallMessage']               = "Before you can use ".MAX_PRODUCT_NAME." it needs to be configured and <br /> the database needs to be created. Click <b>Proceed</b> to continue.";
$GLOBALS['strInstallIntro']                 = "Welcome to <a href='http://".MAX_PRODUCT_URL."' target='_blank'><strong>".MAX_PRODUCT_NAME."</strong></a>! You will soon become part of the web's largest ad-space community.
<p>We try very hard to make this installation or upgrade process as simple as possible. Please follow the instructions on the screen, and if you need more help, please reference the <a href='http://".MAX_PRODUCT_DOCSURL."' target='_blank'><strong>documentation</strong></a>.</p>
<p>If you still have questions after reading the documentation, visit the <a href='http://".MAX_PRODUCT_URL."/support/overview.html' target='_blank'><strong>support</strong></a> section of our website and the Openads <a href='http://".MAX_PRODUCT_FORUMURL."' target='_blank'><strong>community forum</strong></a>.</p>
<p>Thank you for choosing Openads.</p>";
$GLOBALS['strRecoveryRequiredTitle']    = "Your previous upgrade attempt encountered an error";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and Openads must attempt to recover the upgrade process. Please click the Recover button below.";
$GLOBALS['strTermsTitle']               = "License information";
$GLOBALS['strTermsIntro']               = MAX_PRODUCT_NAME . " is a free and open source adserver, distributed under the GPL license. Please review this license, and agree to its terms to continue installation.";
$GLOBALS['strPolicyTitle']               = "Privacy and Data Usage Policy";
$GLOBALS['strPolicyIntro']               = "Please review the Privacy and Data Usage Policy before agreeing to continue the installation.";
$GLOBALS['strDbSetupTitle']               = "Database Setup";
$GLOBALS['strDbSetupIntro']               = MAX_PRODUCT_NAME . " uses a MySQL database to store all of its data.  Please fill in the address of your server, as well as the database name, username and password.  If you do not know which information you should provide here, please contact the administrator of your server.";
$GLOBALS['strDbUpgradeIntro']             = "Below are the detected database details for your installation of " . MAX_PRODUCT_NAME . ". Please check to make sure that these details are correct. When you click continue, " . MAX_PRODUCT_NAME . " will proceed with performing upgrade tasks on your data. Please make sure that you have a proper backup of your data before continuing.";

$GLOBALS['strOaUpToDate']               = "Your Openads database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the Openads administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Warning: the UPGRADE file is still present inside of your var folder. We are unable to remove this file because of insufficient permissions. Please delete this file yourself.";
$GLOBALS['strRemoveUpgradeFile']               = "You must remove the UPGRADE file from the var folder.";
$GLOBALS['strInstallSuccess']               = "<p>Welcome to the Openads community! To get the most out of Openads, there are two last steps you should perform.</p>

<p><strong>Maintenance</strong><br>
Openads is configured to automatically run some maintenance tasks every hour as long as ads are being served. To speed up ad delivery, you can set this up by automatically calling a maintenance file every hour (e.g a cron job). This is not required, but is highly recommended. For more information about this, please reference the <a href='http://".MAX_PRODUCT_DOCSURL."' target='_blank'><strong>documentation</strong></a>.</p>

<p><strong>Security</strong><br>
The Openads installation needs the configuration file to be writable by the server. After making your configuration changes, it is highly recommended to enable read-only access to this file, to provide higher security. For more information, please reference the <a href='http://".MAX_PRODUCT_DOCSURL."' target='_blank'><strong>documentation</strong></a>.</p>

<p>You are now ready to start using Openads. Clicking continue will take you to your newly installed/upgraded version.</p>
<p>Before you start using Openads we suggest you take some time to review your configuration settings found within the \"Settings\" tab.";
$GLOBALS['strInstallNotSuccessful']         = "<b>The installation of ".MAX_PRODUCT_NAME." was not succesful</b><br /><br />Some portions of the install process could not be completed.
                                                It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the
                                                first step of the install process. If you want to know more on what the error message below means, and how to solve it,
                                                please consult the supplied documentation.";
$GLOBALS['strSystemCheck']                  = "System check";
$GLOBALS['strSystemCheckIntro']             = MAX_PRODUCT_NAME . " has certain requirements which will now be checked. We will warn you if any settings need to be changed.";
$GLOBALS['strDbSuccessIntro']               = "The " . MAX_PRODUCT_NAME . " database has now been created. Please click the 'Continue' button to proceed with configuring Openads Administrator and Delivery settings.";
$GLOBALS['strDbSuccessIntroUpgrade']        = "The " . MAX_PRODUCT_NAME . " database has now been updated.  Please click the 'Continue' button to proceed with reviewing the " . MAX_PRODUCT_NAME . " Administrator and Delivery settings.";
$GLOBALS['strErrorOccured']                 = "The following error occured:";
$GLOBALS['strErrorInstallDatabase']         = "The database structure could not be created.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "It was not possible to open a connection to the database.";

$GLOBALS['strErrorWritePermissions']        = "File permission errors have been detected, and must be fixed before you can continue.<br />To fix the errors on a Linux system, try typing in the following command(s):";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorWritePermissionsWin']     = "File permission errors have been detected, and must be fixed before you can continue.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"http://".MAX_PRODUCT_DOCSURL."\">Openads documentation<a/>.";

$GLOBALS['strAdminUrlPrefix']               = "Admin Interface URL";
$GLOBALS['strDeliveryUrlPrefix']            = "Delivery Engine URL";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Delivery Engine URL (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "Image Store URL";
$GLOBALS['strImagesUrlPrefixSSL']           = "Image Store URL (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Invalid username or password";

$GLOBALS['strUpgrade']                      = "Upgrade";
$GLOBALS['strSystemUpToDate']               = "Your system is already up to date, no upgrade is needed at the moment. <br />Click on <b>Proceed</b> to go to home page.";
$GLOBALS['strSystemNeedsUpgrade']           = "The database structure and configuration file need to be upgraded in order to function correctly. Click <b>Proceed</b> to start the upgrade process. <br /><br />Depending on which version you are upgrading from and how many statistics are already stored in the database, this process can cause high load on your database server. Please be patient, the upgrade can take up to a couple of minutes.";
$GLOBALS['strSystemUpgradeBusy']            = "System upgrade in progress, please wait...";
$GLOBALS['strSystemRebuildingCache']        = "Rebuilding cache, please wait...";
$GLOBALS['strServiceUnavalable']            = "The service is temporarily unavailable. System upgrade in progress";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = 'Choose Section';
$GLOBALS['strEditConfigNotPossible']                 = 'It is not possible to edit all settings because the configuration file is locked for security reasons. ' .
                                                       'If you want to make changes, you may need to unlock the configuration file for this installation first.';
$GLOBALS['strEditConfigPossible']                    = 'It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ' .
                                                       'If you want to secure your system, you need to lock the configuration file for this installation.';
$GLOBALS['strUnableToWriteConfig']                   = 'Unable to write changes to the config file';
$GLOBALS['strUnableToWritePrefs']                    = 'Unable to commit preferences to the database';
$GLOBALS['strImageDirLockedDetected']	             = "The supplied <b>Images Folder</b> is not writeable by the server. <br>You can't proceed until you either change permissions of the folder or create the folder.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = 'Configuration Setup';
$GLOBALS['strConfigurationSettings']                 = 'Configuration settings';

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = 'Administrator Settings';
$GLOBALS['strAdministratorAccount']                  = 'The Administrator Account';
$GLOBALS['strLoginCredentials']                      = 'Login Credentials';
$GLOBALS['strAdminUsername']                         = 'Administrator  Username';
$GLOBALS['strAdminPassword']                         = 'Administrator  Password';
$GLOBALS['strInvalidUsername']                       = 'Invalid Username';
$GLOBALS['strBasicInformation']                      = 'Basic Information';
$GLOBALS['strAdminFullName']                         = 'Admin\'s Full Name';
$GLOBALS['strAdminEmail']                            = 'Admin\'s E-mail Address';
$GLOBALS['strAdministratorEmail']                    = 'Administrator E-mail Address';
$GLOBALS['strCompanyName']                           = 'Company Name';
$GLOBALS['strAdminCheckUpdates']                     = 'Check for Updates';
$GLOBALS['strAdminCheckEveryLogin']                  = 'Every Login';
$GLOBALS['strAdminCheckDaily']                       = 'Daily';
$GLOBALS['strAdminCheckWeekly']                      = 'Weekly';
$GLOBALS['strAdminCheckMonthly']                     = 'Monthly';
$GLOBALS['strAdminCheckNever']                       = 'Never';
$GLOBALS['strNovice']                                = 'Delete actions require confirmation for safety';
$GLOBALS['strUserlogEmail']                          = 'Log all outgoing e-mail messages';
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strTimezone']                              = "Timezone";
$GLOBALS['strTimezoneEstimated']                     = "Estimated Timezone";
$GLOBALS['strTimezoneGuessedValue']                  = "Server timezone not correctly set in PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Please see the %DOCS% about setting this variable for PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "documentation";
$GLOBALS['strLoginSettingsTitle']                    = "Administrator Login";
$GLOBALS['strLoginSettingsIntro']                    = "In order to continue with the upgrade process, please enter your " . MAX_PRODUCT_NAME . " administrator user login details.  You must login as the admnistrator user to continue with the upgrade process.";
$GLOBALS['strAdminSettingsTitle']                    = "Your Administrator Account";
$GLOBALS['strAdminSettingsIntro']                    = "The administrator account is used to login to the " . MAX_PRODUCT_NAME . " interface and manage inventory, view statistics, and create tags. Please fill in the username, password, and e-mail address of the administrator.";
$GLOBALS['strConfigSettingsIntro']                   = "Please review the following configuration settings. It is very important that you carefully review these settings as they are vital to the performance and usage of " . MAX_PRODUCT_NAME;

$GLOBALS['strEnableAutoMaintenance']	             = "Automatically perform maintenance during delivery if scheduled maintenance is not set up";

// Openads ID Settings
$GLOBALS['strOpenadsUsername']                       = MAX_PRODUCT_NAME . " Username";
$GLOBALS['strOpenadsPassword']                       = MAX_PRODUCT_NAME . " Password";
$GLOBALS['strOpenadsEmail']                          = MAX_PRODUCT_NAME . " E-mail";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = 'Database Settings';
$GLOBALS['strDatabaseServer']                        = 'Database Server Settings';
$GLOBALS['strDbLocal']                               = 'Connect to local server using sockets'; // Pg only
$GLOBALS['strDbType']                                = 'Database Type';
$GLOBALS['strDbHost']                                = 'Database Hostname';
$GLOBALS['strDbPort']                                = 'Database Port Number';
$GLOBALS['strDbUser']                                = 'Database Username';
$GLOBALS['strDbPassword']                            = 'Database Password';
$GLOBALS['strDbName']                                = 'Database Name';
$GLOBALS['strDatabaseOptimalisations']               = 'Database Optimisation Settings';
$GLOBALS['strPersistentConnections']                 = 'Use Persistent Connections';
$GLOBALS['strCantConnectToDb']                       = 'Can\'t Connect to Database';
$GLOBALS['strDemoDataInstall']                       = 'Install Demo Data';
$GLOBALS['strDemoDataIntro']                         = 'Default setup data can be loaded into ' . MAX_PRODUCT_NAME . ' to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.';

// Email Settings
$GLOBALS['strEmailSettings']                         = 'E-mail Settings';
$GLOBALS['strQmailPatch']                            = 'qmail patch';
$GLOBALS['strEnableQmailPatch']                      = 'Enable qmail patch';
$GLOBALS['strEmailHeader']                           = 'E-mail headers';
$GLOBALS['strEmailLog']                           = 'E-mail log';

// Debug Logging Settings
$GLOBALS['strDebug']                                 = 'Debug Logging Settings';
$GLOBALS['strProduction']                            = 'Production server';
$GLOBALS['strEnableDebug']                           = 'Enable Debug Logging';
$GLOBALS['strDebugMethodNames']                      = 'Include method names in debug log';
$GLOBALS['strDebugLineNumbers']                      = 'Include line numbers in debug log';
$GLOBALS['strDebugType']                             = 'Debug Log Type';
$GLOBALS['strDebugTypeFile']                         = 'File';
$GLOBALS['strDebugTypeMcal']                         = 'mCal';
$GLOBALS['strDebugTypeSql']                          = 'SQL Database';
$GLOBALS['strDebugTypeSyslog']                       = 'Syslog';
$GLOBALS['strDebugName']                             = 'Debug Log Name, Calendar, SQL Table,<br />or Syslog Facility';
$GLOBALS['strDebugPriority']                         = 'Debug Priority Level';
$GLOBALS['strPEAR_LOG_DEBUG']                        = 'PEAR_LOG_DEBUG - Most Information';
$GLOBALS['strPEAR_LOG_INFO']                         = 'PEAR_LOG_INFO - Default Information';
$GLOBALS['strPEAR_LOG_NOTICE']                       = 'PEAR_LOG_NOTICE';
$GLOBALS['strPEAR_LOG_WARNING']                      = 'PEAR_LOG_WARNING';
$GLOBALS['strPEAR_LOG_ERR']                          = 'PEAR_LOG_ERR';
$GLOBALS['strPEAR_LOG_CRIT']                         = 'PEAR_LOG_CRIT';
$GLOBALS['strPEAR_LOG_ALERT']                        = 'PEAR_LOG_ALERT';
$GLOBALS['strPEAR_LOG_EMERG']                        = 'PEAR_LOG_EMERG - Least Information';
$GLOBALS['strDebugIdent']                            = 'Debug Identification String';
$GLOBALS['strDebugUsername']                         = 'mCal, SQL Server Username';
$GLOBALS['strDebugPassword']                         = 'mCal, SQL Server Password';

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = 'Delivery Settings';
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME . ' Server Access Paths';
$GLOBALS['strWebPathSimple']                         = 'Web path';
$GLOBALS['strDeliveryPath']                          = 'Delivery path';
$GLOBALS['strImagePath']                             = 'Images path';
$GLOBALS['strDeliverySslPath']                       = 'Delivery SSL path';
$GLOBALS['strImageSslPath']                          = 'Images SSL path';
$GLOBALS['strImageStore']                            = 'Images folder';
$GLOBALS['strTypeWebSettings']                       = 'Webserver Local Banner Storage Settings';
$GLOBALS['strTypeWebMode']                           = 'Storing Method';
$GLOBALS['strTypeWebModeLocal']                      = 'Local Directory';
$GLOBALS['strTypeDirError']                          = 'The local directory cannot be written to by the web server';
$GLOBALS['strTypeWebModeFtp']                        = 'External FTP Server';
$GLOBALS['strTypeWebDir']                            = 'Local Directory';
$GLOBALS['strTypeFTPHost']                           = 'FTP Host';
$GLOBALS['strTypeFTPDirectory']                      = 'Host Directory';
$GLOBALS['strTypeFTPUsername']                       = 'Login';
$GLOBALS['strTypeFTPPassword']                       = 'Password';
$GLOBALS['strTypeFTPPassive']                        = 'Use passive FTP';
$GLOBALS['strTypeFTPErrorDir']                       = 'The FTP Host Directory does not exist';
$GLOBALS['strTypeFTPErrorConnect']                   = 'Could not connect to the FTP Server, the Login or Password is not correct';
$GLOBALS['strTypeFTPErrorNoSupport']                 = 'Your installation of PHP does not support FTP.';
$GLOBALS['strTypeFTPErrorHost']                      = 'The FTP Host is not correct';
$GLOBALS['strDeliveryFilenames']                     = 'Delivery File Names';
$GLOBALS['strDeliveryFilenamesAdClick']              = 'Ad Click';
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = 'Ad Conversion Variables';
$GLOBALS['strDeliveryFilenamesAdContent']            = 'Ad Content';
$GLOBALS['strDeliveryFilenamesAdConversion']         = 'Ad Conversion';
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = 'Ad Conversion (JavaScript)';
$GLOBALS['strDeliveryFilenamesAdFrame']              = 'Ad Frame';
$GLOBALS['strDeliveryFilenamesAdImage']              = 'Ad Image';
$GLOBALS['strDeliveryFilenamesAdJS']                 = 'Ad (JavaScript)';
$GLOBALS['strDeliveryFilenamesAdLayer']              = 'Ad Layer';
$GLOBALS['strDeliveryFilenamesAdLog']                = 'Ad Log';
$GLOBALS['strDeliveryFilenamesAdPopup']              = 'Ad Popup';
$GLOBALS['strDeliveryFilenamesAdView']               = 'Ad View';
$GLOBALS['strDeliveryFilenamesXMLRPC']               = 'XML RPC Invocation';
$GLOBALS['strDeliveryFilenamesLocal']                = 'Local Invocation';
$GLOBALS['strDeliveryFilenamesFrontController']      = 'Front Controller';
$GLOBALS['strDeliveryFilenamesFlash']                = 'Flash Include (Can be a full URL)';
$GLOBALS['strDeliveryCaching']                       = 'Banner Delivery Cache Settings';
$GLOBALS['strDeliveryCacheLimit']                    = 'Time Between Banner Cache Updates (seconds)';

$GLOBALS['strOrigin']                                = 'Use remote origin server';
$GLOBALS['strOriginType']                            = 'Origin server type';
$GLOBALS['strOriginHost']                            = 'Hostname for origin server';
$GLOBALS['strOriginPort']                            = 'Port number for origin database';
$GLOBALS['strOriginScript']                          = 'Script file for origin database';
$GLOBALS['strOriginTypeXMLRPC']                      = 'XMLRPC';
$GLOBALS['strOriginTimeout']                         = 'Origin timeout (seconds)';
$GLOBALS['strOriginProtocol']                        = 'Origin server protocol';

$GLOBALS['strDeliveryAcls']                          = 'Evaluate banner delivery limitations during delivery';
$GLOBALS['strDeliveryObfuscate']                     = 'Obfuscate channel when delivering ads';
$GLOBALS['strDeliveryExecPhp']                       = 'Allow PHP code in ads to be executed<br />(Warning: Security risk)';
$GLOBALS['strDeliveryCtDelimiter']                   = '3rd Party Click Tracking Delimiter';
$GLOBALS['strP3PSettings']                           = 'P3P Privacy Policies';
$GLOBALS['strUseP3P']                                = 'Use P3P Policies';
$GLOBALS['strP3PCompactPolicy']                      = 'P3P Compact Policy';
$GLOBALS['strP3PPolicyLocation']                     = 'P3P Policy Location';

// General Settings
$GLOBALS['generalSettings']                          = 'Global General System Settings';
$GLOBALS['uiEnabled']                                = 'User Interface Enabled';
$GLOBALS['defaultLanguage']                          = 'Default System Language<br />(Each user can select their own language)';

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = 'Geotargeting Settings';
$GLOBALS['strGeotargeting']                          = 'Geotargeting Settings';
$GLOBALS['strGeotargetingType']                      = 'Geotargeting Module Type';
$GLOBALS['strGeotargetingUseBundledCountryDb']       = 'Use the bundled MaxMind GeoLiteCountry database';
$GLOBALS['strGeotargetingGeoipCountryLocation']      = 'MaxMind GeoIP Country Database Location';
$GLOBALS['strGeotargetingGeoipRegionLocation']       = 'MaxMind GeoIP Region Database Location';
$GLOBALS['strGeotargetingGeoipCityLocation']         = 'MaxMind GeoIP City Database Location';
$GLOBALS['strGeotargetingGeoipAreaLocation']         = 'MaxMind GeoIP Area Database Location';
$GLOBALS['strGeotargetingGeoipDmaLocation']          = 'MaxMind GeoIP DMA Database Location';
$GLOBALS['strGeotargetingGeoipOrgLocation']          = 'MaxMind GeoIP Organisation Database Location';
$GLOBALS['strGeotargetingGeoipIspLocation']          = 'MaxMind GeoIP ISP Database Location';
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = 'MaxMind GeoIP Netspeed Database Location';
$GLOBALS['strGeoSaveStats']                          = 'Save the GeoIP data in the database logs';
$GLOBALS['strGeoShowUnavailable']                    = 'Show geotargeting delivery limitations even if GeoIP data unavailable';
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = 'The MaxMind GeoIP Country Database does not exist in the location specified';
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = 'The MaxMind GeoIP Region Database does not exist in the location specified';
$GLOBALS['strGeotrackingGeoipCityLocationError']     = 'The MaxMind GeoIP City Database does not exist in the location specified';
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = 'The MaxMind GeoIP Area Database does not exist in the location specified';
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = 'The MaxMind GeoIP DMA Database does not exist in the location specified';
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = 'The MaxMind GeoIP Organisation Database does not exist in the location specified';
$GLOBALS['strGeotrackingGeoipIspLocationError']      = 'The MaxMind GeoIP ISP Database does not exist in the location specified';
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = 'The MaxMind GeoIP Netspeed Database does not exist in the location specified';

// Interface Settings
$GLOBALS['strInventory']                             = 'Inventory';
$GLOBALS['strUploadConversions']                     = 'Upload Conversions';
$GLOBALS['strShowCampaignInfo']                      = 'Show extra campaign info on <i>Campaign overview</i> page';
$GLOBALS['strShowBannerInfo']                        = 'Show extra banner info on <i>Banner overview</i> page';
$GLOBALS['strShowCampaignPreview']                   = 'Show preview of all banners on <i>Banner overview</i> page';
$GLOBALS['strShowBannerHTML']                        = 'Show actual banner instead of plain HTML code for HTML banner preview';
$GLOBALS['strShowBannerPreview']                     = 'Show banner preview at the top of pages which deal with banners';
$GLOBALS['strHideInactive']                          = 'Hide inactive items from all overview pages';
$GLOBALS['strGUIShowMatchingBanners']                = 'Show matching banners on the <i>Linked banner</i> pages';
$GLOBALS['strGUIShowParentCampaigns']                = 'Show parent campaigns on the <i>Linked banner</i> pages';
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = 'Default Campaigns to Anonymous';
$GLOBALS['strStatisticsDefaults']                    = 'Statistics';
$GLOBALS['strBeginOfWeek']                           = 'Beginning of Week';
$GLOBALS['strPercentageDecimals']                    = 'Percentage Decimals';
$GLOBALS['strWeightDefaults']                        = 'Default Weight';
$GLOBALS['strDefaultBannerWeight']                   = 'Default Banner Weight';
$GLOBALS['strDefaultCampaignWeight']                 = 'Default Campaign Weight';
$GLOBALS['strDefaultBannerWErr']                     = 'Default banner weight should be a positive integer';
$GLOBALS['strDefaultCampaignWErr']                   = 'Default campaign weight should be a positive integer';
$GLOBALS['strConfirmationUI']                        = 'Confirmation in User Interface';

$GLOBALS['strPublisherDefaults']                     = 'Publisher defaults';
$GLOBALS['strModesOfPayment']                        = 'Modes of payment';
$GLOBALS['strCurrencies']                            = 'Currencies';
$GLOBALS['strCategories']                            = 'Categories';
$GLOBALS['strHelpFiles']                             = 'Help files';
$GLOBALS['strHasTaxID']                              = 'Tax ID';
$GLOBALS['strDefaultApproved']                       = 'Approved check box';

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = 'Choose Advertiser';
$GLOBALS['strChooseCampaign']                        = 'Choose Campaign';
$GLOBALS['strChooseCampaignBanner']                  = 'Choose Banner';
$GLOBALS['strChooseTracker']                         = 'Choose Tracker';
$GLOBALS['strDefaultConversionStatus']               = 'Default Conversion Status';
$GLOBALS['strDefaultConversionType']                 = 'Default Conversion Type';
$GLOBALS['strCSVTemplateSettings']                   = 'CSV Template Settings';
$GLOBALS['strIncludeCountryInfo']                    = 'Include Country Info';
$GLOBALS['strIncludeBrowserInfo']                    = 'Include Browser Info';
$GLOBALS['strIncludeOSInfo']                         = 'Include OS Info';
$GLOBALS['strIncludeSampleRow']                      = 'Include Sample Row';
$GLOBALS['strCSVTemplateAdvanced']                   = 'Advanced Template';
$GLOBALS['strCSVTemplateIncVariables']               = 'Include Tracker Variables';

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = 'Allowed Invocation Types';
$GLOBALS['strIncovationDefaults']                    = 'Incovation Defaults';
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = 'Enable 3rd Party Clicktracking by Default';

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = 'Banner Delivery Settings';

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = 'Banner Logging Settings';
$GLOBALS['strLogAdRequests']                         = 'Log a request every time a banner is requested';
$GLOBALS['strLogAdImpressions']                      = 'Log an impression every time a banner is viewed';
$GLOBALS['strLogAdClicks']                           = 'Log a click every time a viewer clicks on a banner';
$GLOBALS['strLogTrackerImpressions']                 = 'Log a tracker impression every time a tracker beacon is viewed';
$GLOBALS['strReverseLookup']                         = 'Reverse lookup the hostnames of viewers when not supplied';
$GLOBALS['strProxyLookup']                           = 'Try to determine the real IP address of viewers behind a proxy server';
$GLOBALS['strSniff']                                 = 'Extract the viewer\'s operating system and web browser information using phpSniff';
$GLOBALS['strPreventLogging']                        = 'Block Banner Logging Settings';
$GLOBALS['strIgnoreHosts']                           = 'Don\'t log any statistics for viewers using any of the following IP addresses or hostnames';

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = 'Banner Storage Settings';

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = 'Maintenance Settings';
$GLOBALS['strCsvImport']                             = 'Allow upload of offline conversions';
$GLOBALS['strBlockAdViews']                          = 'Don\'t count Ad Impressions if the viewer has seen the same ad/zone pair within the specified time (seconds)';
$GLOBALS['strBlockAdViewsError']                     = 'Ad Impression block value must be a non-negative integer';
$GLOBALS['strBlockAdClicks']                         = 'Don\'t count Ad Clicks if the viewer has clicked on the same ad/zone pair within the specified time (seconds)';
$GLOBALS['strBlockAdClicksError']                    = 'Ad Click block value must be a non-negative integer';
$GLOBALS['strMaintenanceOI']                         = 'Maintenance Operation Interval (minutes)';
$GLOBALS['strMaintenanceOIError']                    = 'The Maintenace Operation Interval is not valid - see documentation for valid values';
$GLOBALS['strMaintenanceCompactStats']               = 'Delete raw statistics after processing?';
$GLOBALS['strMaintenanceCompactStatsGrace']          = 'Grace period before deleting processed statistics (seconds)';
$GLOBALS['strPrioritySettings']                      = 'Priority Settings';
$GLOBALS['strPriorityInstantUpdate']                 = 'Update advertisement priorities immediately when changes made in the UI';
$GLOBALS['strWarnCompactStatsGrace']                 = 'The Compact Stats Grace period must be a positive integer';
$GLOBALS['strDefaultImpConWindow']                   = 'Default Ad Impression Connection Window (seconds)';
$GLOBALS['strDefaultImpConWindowError']              = 'If set, the Default Ad Impression Connection Window must be a positive integer';
$GLOBALS['strDefaultCliConWindow']                   = 'Default Ad Click Connection Window (seconds)';
$GLOBALS['strDefaultCliConWindowError']              = 'If set, the Default Ad Click Connection Window must be a positive integer';
$GLOBALS['strAdminEmailHeaders']                     = 'Add the following headers to each e-mail message sent by ' . MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = 'Send a warning when the number of impressions left are less than specified here';
$GLOBALS['strWarnLimitErr']                          = 'Warn Limit must be a positive integer';
$GLOBALS['strWarnLimitDays']                         = 'Send a warning when the days left are less than specified here';
$GLOBALS['strWarnLimitDaysErr']                      = 'Warn Limit Days should be a positive number';
$GLOBALS['strAllowEmail']                            = 'Globally allow sending of e-mails';
$GLOBALS['strEmailAddressFrom']                      = 'E-mail address to send reports FROM';
$GLOBALS['strEmailAddressName']                      = 'Company or personal name to sign off e-mail with';
$GLOBALS['strWarnAdmin']                             = 'Send a warning to the administrator every time a campaign is almost expired';
$GLOBALS['strWarnClient']                            = 'Send a warning to the advertiser every time a campaign is almost expired';
$GLOBALS['strWarnAgency']                            = 'Send a warning to the agency every time a campaign is almost expired';

// UI Settings
$GLOBALS['strGuiSettings']                           = 'User Interface Settings';
$GLOBALS['strGeneralSettings']                       = 'General Settings';
$GLOBALS['strAppName']                               = 'Application Name';
$GLOBALS['strMyHeader']                              = 'Header File Location';
$GLOBALS['strMyHeaderError']                         = 'The header file does not exist in the location you specified';
$GLOBALS['strMyFooter']                              = 'Footer File Location';
$GLOBALS['strMyFooterError']                         = 'The footer file does not exist in the location you specified';
$GLOBALS['strDefaultTrackerStatus']                  = 'Default tracker status';
$GLOBALS['strDefaultTrackerType']                    = 'Default tracker type';
$GLOBALS['strSSLSettings']                           = 'SSL Settings';
$GLOBALS['requireSSL']                               = 'Force SSL Access on User Interface';
$GLOBALS['sslPort']                                  = 'SSL Port Used by Web Server';

$GLOBALS['strMyLogo']                                = 'Name of custom logo file';
$GLOBALS['strMyLogoError']                           = 'The logo file does not exist in the admin/images directory';
$GLOBALS['strGuiHeaderForegroundColor']              = 'Color of the header foreground';
$GLOBALS['strGuiHeaderBackgroundColor']              = 'Color of the header background';
$GLOBALS['strGuiActiveTabColor']                     = 'Color of the active tab';
$GLOBALS['strGuiHeaderTextColor']                    = 'Color of the text in the header';
$GLOBALS['strColorError']                            = 'Please enter colors in an RGB format, like \'0066CC\'';

$GLOBALS['strGzipContentCompression']                = 'Use GZIP Content Compression';
$GLOBALS['strClientInterface']                       = 'Advertiser Interface';
$GLOBALS['strReportsInterface']                      = 'Reports Interface';
$GLOBALS['strClientWelcomeEnabled']                  = 'Enable Advertiser Welcome Message';
$GLOBALS['strClientWelcomeText']                     = 'Welcome Text<br />(HTML Tags Allowed)';

$GLOBALS['strPublisherInterface']                    = 'Publisher interface';
$GLOBALS['strPublisherAgreementEnabled']             = 'Enable login control for publishers who haven\'t accepted Terms and Conditions';
$GLOBALS['strPublisherAgreementText']                = 'Login text (HTML tags allowed)';


/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "Experimental";
$GLOBALS['strKeywordRetrieval']             = "Keyword retrieval";
$GLOBALS['strBannerRetrieval']              = "Banner retrieval method";
$GLOBALS['strRetrieveRandom']               = "Random banner retrieval (default)";
$GLOBALS['strRetrieveNormalSeq']            = "Normal sequental banner retrieval";
$GLOBALS['strWeightSeq']                    = "Weight based sequential banner retrieval";
$GLOBALS['strFullSeq']                      = "Full sequential banner retrieval";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "Allow logical operators when using direct selection";
$GLOBALS['strUseMultipleKeys']              = "Allow multiple keywords when using direct selection";

$GLOBALS['strTableBorderColor']             = "Table Border Color";
$GLOBALS['strTableBackColor']               = "Table Back Color";
$GLOBALS['strTableBackColorAlt']            = "Table Back Color (Alternative)";
$GLOBALS['strMainBackColor']                = "Main Back Color";
$GLOBALS['strOverrideGD']                   = "Override GD Imageformat";
$GLOBALS['strTimeZone']                     = "Time Zone";

?>
