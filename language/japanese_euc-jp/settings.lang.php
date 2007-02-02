<?php // $Revision$

/************************************************************************/
/* Openads 2.0                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2000-2007 by the Openads developers                    */
/* For more information visit: http://www.openads.org                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

//  Translator: Tadashi Jokagi <elf2000@users.sourceforge.net>
//  EN-Revision: 2.6.2.18

// Installer translation strings
$GLOBALS['strInstall']				= "���󥹥ȡ���";
$GLOBALS['strChooseInstallLanguage']		= "���󥹥ȡ����³���θ�������򤹤�";
$GLOBALS['strLanguageSelection']		= "��������";
$GLOBALS['strDatabaseSettings']			= "�ǡ����١�������";
$GLOBALS['strAdminSettings']			= "����������";
$GLOBALS['strAdvancedSettings']			= "���٤ʥǡ����١�������";
$GLOBALS['strOtherSettings']			= "����¾������";
$GLOBALS['strLicenseInformation']		= "�饤���󥹾���";
$GLOBALS['strAdministratorAccount']		= "�����ԥ��������";
$GLOBALS['strDatabasePage']				= $phpAds_dbmsname." �ǡ����١���";
$GLOBALS['strInstallWarning']			= "�����С��ȴ����ʳ�ǧ";
$GLOBALS['strCongratulations']			= "����ǤȤ��������ޤ�!";
$GLOBALS['strInstallFailed']			= "���󥹥ȡ���˼��Ԥ��ޤ���!";
$GLOBALS['strSpecifyAdmin']				= "�����ԥ�������Ȥ�����";
$GLOBALS['strSpecifyLocaton']			= "�����С���� ".$phpAds_productname." �ξ��λ���";

$GLOBALS['strWarning']				= "�ٹ�";
$GLOBALS['strFatalError']			= "��̿Ū�ʥ��顼��ȯ�����ޤ�����";
$GLOBALS['strUpdateError']			= "������˥��顼��ȯ�����ޤ�����";
$GLOBALS['strUpdateDatabaseError']	= "��������ͳ�ˤ�ꡢ�ǡ����١�����¤�ι������������ޤ���Ǥ�����The recommended way to proceed is to click <b>������Ƽ¹Ԥ���</b> to try to correct these potential problems. �����Υ��顼�� ".$phpAds_productname." �ε�ǽ���˱ƶ����ʤ��ȳο������硢<b>�ٹ��̵�뤹��</b>�򥯥�å����ơ�³���ޤ��������Υ��顼��̵��Ͻ��������������������⤷��ʤ����侩����ޤ���!";
$GLOBALS['strAlreadyInstalled']			= $phpAds_productname." �ϴ��ˤ��Υ����ƥ�˥��󥹥ȡ��뤵��Ƥ��ޤ���������򤷤�����硢��<a href='settings-index.php'>���󥿡��ե���������</a>�פ˰�ư���Ƥ���������";
$GLOBALS['strCouldNotConnectToDB']		= "
�ǡ����١�������³�Ǥ��ޤ���Ǥ��������ꤵ��Ƥ��������Ƴ�ǧ���Ƥ���������
����˴��˻��ꤷ�Ƥ���̾���Υǡ����١������ǡ����١��������С���¸�ߤ��뤳�Ȥ�Τ���Ƥ���������".$phpAds_productname." �ϥǡ����١�����������ޤ���Τǡ����󥹥ȡ��顼��¹Ԥ������˼�ư�Ǻ������ʤ���Фʤ�ޤ���";
$GLOBALS['strCreateTableTestFailed']		= "���ꤵ�줿�桼�����ϡ��ǡ����١�����¤�κ����������򤹤븢�¤��äƤ��ޤ��󡣥ǡ����١��������Ԥ�Ϣ���Ƥ���������";
$GLOBALS['strUpdateTableTestFailed']		= "���ꤵ�줿�桼�����ϡ��ǡ����١�����¤�ι����򤹤븢�¤���äƤ��ޤ��󡣥ǡ����١��������Ԥ�Ϣ���Ƥ���������";
$GLOBALS['strTablePrefixInvalid']		= "�ơ��֥���Ƭ���̵����ʸ�����ޤޤ�Ƥ��ޤ���";
$GLOBALS['strTableInUse']			= "The database which you specified is already used for ".$phpAds_productname.", please use a different table prefix, or read the manual for upgrading instructions.";
$GLOBALS['strTableWrongType']		= "���ꤷ���ơ��֥�μ���ϡ�".$phpAds_dbmsname."�Υ��󥹥ȡ���ǥ��ݡ��Ȥ���Ƥ��ޤ���";
$GLOBALS['strMayNotFunction']			= "��³�������ˡ�����������Ū������������Ƥ�������:";
$GLOBALS['strFixProblemsBefore']		= $phpAds_productname." �򥤥󥹥ȡ��뤹�����ˡ����ι��ܤ�������ɬ�פ�����ޤ������Υ��顼��å������ˤĤ��Ƶ���򲿤����äƤ�����ϡ���������ɤ����ѥå������ΰ����Ǥ���<i>�����ԥ�����</i>���ɤ�Ǥ���������";
$GLOBALS['strFixProblemsAfter']			= "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".$phpAds_productname." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']			= "�ٹ��̵�뤹��";
$GLOBALS['strWarningDBavailable']		= "������� PHP �ΥС������ϡ�".$phpAds_dbmsname." �ǡ����١��������С��ؤ���³�򥵥ݡ��Ȥ��Ƥ��ޤ��󡣼��˿ʤ�����ˡ�PHP ".$phpAds_dbmsname." ��ĥ��ͭ���ˤ���ɬ�פ�����ޤ���";
$GLOBALS['strWarningPHPversion']		= $phpAds_productname." �����Τ˵�ǽ����ˤϡ� PHP �С������ 4.0.3 �ʾ���׵ᤷ�ޤ������ߥС������ {php_version} ������Ǥ���";
$GLOBALS['strWarningPHP5beta']			= "You trying to install ".$phpAds_productname." on a server running an early test version of PHP 5. These versions are not indended for production use and usually contain bugs. It is not recommended to run ".$phpAds_productname." on PHP 5, except for testing purposes.";
$GLOBALS['strWarningRegisterGlobals']		= "PHP �������͡�register_globals�פ��on�פˤ���ɬ�פ�����ޤ���";
$GLOBALS['strWarningMagicQuotesGPC']		= "PHP �������͡�magic_quotes_gpc�פ��on�פˤ���ɬ�פ�����ޤ���";
$GLOBALS['strWarningMagicQuotesRuntime']	= "PHP �������͡�magic_quotes_runtime�פ��off�פˤ���ɬ�פ�����ޤ���";
$GLOBALS['strWarningMagicQuotesSybase']	= "PHP �������͡�magic_quotes_sybase�פ��off�פˤ���ɬ�פ�����ޤ���";
$GLOBALS['strWarningFileUploads']		= "PHP �������͡�file_uploads�פ��on�פˤ���ɬ�פ�����ޤ���";
$GLOBALS['strWarningTrackVars']			= "PHP �������͡�track_vars�פ��on�פˤ���ɬ�פ�����ޤ���";
$GLOBALS['strWarningPREG']				= "���Ѥ��Ƥ��� PHP �ΥС������� Perl �ߴ�����ɽ��(PCRE)�򥵥ݡ��Ȥ��Ƥ��ޤ��󡣿ʤ������ PCRE ��ĥ��ͭ���ˤ���ɬ�פ�����ޤ���";
$GLOBALS['strConfigLockedDetected']		= $phpAds_productname." �ϥ����С����� <b>config.inc.php</b> ���񤭹��ߤǤ��ʤ����Ȥ��Τ��ޤ������ե�����Υѡ��ߥå������ѹ�����ޤǿʤळ�Ȥ��Ǥ��ޤ��󡣤���򤹤���ˡ��ʬ����ʤ���硢�󶡤��줿�ɥ�����Ȥ��ɤ�Ǥ���������";
$GLOBALS['strCacheLockedDetected']		= "You are using Files delivery caching and ".$phpAds_productname." has detected that the <b>cache</b> directory is not writeable by the server. You can't proceed until you change permissions of the folder. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']  			= "It is currently not possible to update the database. If you decide to proceed, all existing banners, statistics and advertisers will be deleted.";
$GLOBALS['strIgnoreErrors']			= "���顼��̵�뤹��";
$GLOBALS['strRetry']				= "�Ƽ¹Ԥ���";
$GLOBALS['strRetryUpdate']			= "�����κƼ¹Ԥ���";
$GLOBALS['strTableNames']			= "�ơ��֥�̾";
$GLOBALS['strTablesPrefix']			= "�ơ��֥�̾����Ƭ��";
$GLOBALS['strTablesType']			= "�ơ��֥�μ���";

$GLOBALS['strRevCorrupt']			= "�ե����� <b>{filename}</b> ����������������ޤ��������Υե�����������Ƥ��ʤ���硢�����С��ˤ��Υե�����ο��������ԡ��򥢥åץ��ɤ���ٹԤäƤ������������Υե������ʬ���Ȥǽ���������硢�����ˤ��ηٹ��̵�뤹�뤳�Ȥ��Ǥ��ޤ���";
$GLOBALS['strRevTooOld']			= "The file <b>{filename}</b> is older than the one that is supposed to be used with this version of ".$phpAds_productname.". Please try to upload a new copy of this file to the server.";
$GLOBALS['strRevMissing']			= "The file <b>{filename}</b> could not be checked because it is missing. Please try to upload a new copy of this file to the server.";
$GLOBALS['strRevCVS']				= $phpAds_productname." ��CVS�Υ����å������Ȥ򥤥󥹥ȡ��뤷�褦�Ȥ��Ƥ��ޤ�������ϸ�����꡼���ǤϤʤ����������԰��꤫�⤷��ʤ�������ǽ���ʤ����⤷��ޤ��������˷�³�������Ǥ���?";

$GLOBALS['strInstallWelcome']			= "�褦���� ".$phpAds_productname." ��";
$GLOBALS['strInstallMessage']			= "Before you can use ".$phpAds_productname." it needs to be configured and <br> the database needs to be created. <b>�ʤ�</b> �򥯥�å�����³���ޤ���";
$GLOBALS['strInstallMessageCheck']		= $phpAds_productname." has checked the integrity of the files you uploaded to the server and has checked wether the server is capable of running ".$phpAds_productname.". 
��³�������ˡ����ι��ܤ���դ���ɬ�פ�����ޤ���";
$GLOBALS['strInstallMessageAdmin']		= "��³�������ˡ����åȥ��åפǴ����ԥ�������Ȥ�ɬ�פȤ��ޤ���You can use this account to log into the administrator interface and manage your inventory and view statistics.";
$GLOBALS['strInstallMessageDatabase']	= $phpAds_productname." uses a ".$phpAds_dbmsname." database store the inventory and all of the statistics. Before you can continue you need to tell us which server you want to use and which username and password ".$phpAds_productname." needs to use to contact the server. If you do not know which information you should provide here, please contact the administrator of your server.";
$GLOBALS['strInstallSuccess']			= "<b>".$phpAds_productname." �Υ���s�ȡ��뤬��λ���ޤ�����</b><br><br>In order for ".$phpAds_productname." to function correctly you also need
						   to make sure the maintenance file is run every hour. More information about this subject can be found in the documentation.
						   <br><br>Click <b>Proceed</b> to go the configuration page, where you can 
						   set up more settings. Please do not forget to lock the config.inc.php file when you are finished to prevent security
						   breaches.";
$GLOBALS['strUpdateSuccess']			= "<b>The upgrade of ".$phpAds_productname." was succesful.</b><br><br>In order for ".$phpAds_productname." to function correctly you also need
						   to make sure the maintenance file is run every hour (previously this was every day). More information about this subject can be found in the documentation.
						   <br><br>Click <b>Proceed</b> to go to the administration interface. Please do not forget to lock the config.inc.php file 
						   to prevent security breaches.";
$GLOBALS['strInstallNotSuccessful']		= "<b>The installation of ".$phpAds_productname." was not succesful</b><br><br>Some portions of the install process could not be completed.
						   It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the
						   first step of the install process. If you want to know more on what the error message below means, and how to solve it, 
						   please consult the supplied documentation.";
$GLOBALS['strErrorOccured']			= "The following error occured:";
$GLOBALS['strErrorInstallDatabase']		= "�ǡ����١�����¤������Ǥ��ޤ���Ǥ�����";
$GLOBALS['strErrorInstallConfig']		= "����ե����뤫�ǡ����١����򹹿��Ǥ��ޤ���Ǥ�����";
$GLOBALS['strErrorInstallDbConnect']		= "It was not possible to open a connection to the database.";

$GLOBALS['strUrlPrefix']			= "URL ��Ƭ��";

$GLOBALS['strProceed']				= "�ʤ� &gt;";
$GLOBALS['strInvalidUserPwd']			= "̵���ʥ桼����̾���ѥ���ɤǤ���";

$GLOBALS['strUpgrade']				= "���åץ��졼�ɤ���";
$GLOBALS['strSystemUpToDate']			= "�����ƥ�ϴ��˺ǿ��Ǥ������åץ��졼�ɤϺ��ΤȤ���ɬ�פ���ޤ���<br><b>�ʤ�</b> �򥯥�å�����ȥۡ���ڡ����˰�ư���ޤ���";
$GLOBALS['strSystemNeedsUpgrade']		= "���Τ˵�ǽ���뤿��˥ǡ����١�����¤���������ե�����򥢥åץ��졼�ɤ���ɬ�פ�����ޤ���<b>�ʤ�</b> �򥯥�å�����ȡ����åץ��졼�ɽ����򳫻Ϥ��ޤ���<br><br>Depending on which version you are upgrading from and how many statistics are already stored in the database, this process can cause high load on your database server. �������Ƥ������������åץ��쥤�ɤ�2��3ʬ�ǻ��Ѥ��뤳�Ȥ��Ǥ��ޤ���";
$GLOBALS['strSystemUpgradeBusy']		= "�����ƥॢ�åץ��졼�ɤν�����Ǥ����ä����Ԥ���������...";
$GLOBALS['strSystemRebuildingCache']		= "����å����ƹ�����Ǥ����ä����Ԥ���������...";
$GLOBALS['strServiceUnavalable']		= "The service is temporarily unavailable. System upgrade in progress";

$GLOBALS['strConfigNotWritable']		= "�ե������config.inc.php�פ��񤭹���ޤ���";
$GLOBALS['strPhpBug20144']				= "Your PHP version is affected by a <a href='http://bugs.php.net/bug.php?id=20114' target='_blank'>bug</a> which will prevent ".$phpAds_productname." from running correctly.
							Upgrading to PHP 4.3.0+ is required before installing ".$phpAds_productname.".";
$GLOBALS['strPhpBug24652']				= "You trying to install ".$phpAds_productname." on a server running an early test version of PHP 5.
										   These versions are not indended for production use and usually contain bugs.
										   One of these bugs prevents ".$phpAds_productname." from running correctly.
										   This <a href='http://bugs.php.net/bug.php?id=24652' target='_blank'>bug</a> is already fixed
										   and the final version of PHP 5 is not affected by this bug.";





/*********************************************************/
/* Configuration translations                            */
/*********************************************************/

// Global
$GLOBALS['strChooseSection']			= "�������������";
$GLOBALS['strDayFullNames'] 			= array("������","������","������","������","������","������","������");
$GLOBALS['strEditConfigNotPossible']   		= "����ե����뤬�������ƥ�����ͳ�ǥ�å������Τǡ�������������Խ����뤳�ȤϤǤ��ޤ���".
										  "�ѹ���������С��ǽ�˥ե����� config.inc.php �Υ�å���������ɬ�פ�����ޤ���";
$GLOBALS['strEditConfigPossible']		= "�����ե����뤬��å�����ʤ��Τǡ�����򤹤٤��Խ����뤳�ȤϤǤ��ޤ���������������ϵ�̩��ϳ�̤��̤��뤫�⤷��ޤ���".
										  "�����ƥ������ˤ�������С��ե����� config.inc.php ���å�����ɬ�פ�����ޤ���";



// Database
$GLOBALS['strDatabaseSettings']			= "�ǡ����١�������";
$GLOBALS['strDatabaseServer']			= "�ǡ����١��������С�";
$GLOBALS['strDbLocal']				= "�����åȤ��Ѥ��ƥ����륵���С�����³����"; // Pg only
$GLOBALS['strDbHost']				= "�ǡ����١����ۥ���̾";
$GLOBALS['strDbPort']				= "�ǡ����١����ݡ����ֹ�";
$GLOBALS['strDbUser']				= "�ǡ����١����桼����̾";
$GLOBALS['strDbPassword']			= "�ǡ����١����ѥ����";
$GLOBALS['strDbName']				= "�ǡ����١���̾";

$GLOBALS['strDatabaseOptimalisations']		= "�ǡ����١����κ�Ŭ��";
$GLOBALS['strPersistentConnections']		= "��³����³����Ѥ���";
$GLOBALS['strInsertDelayed']			= "�ٱ� INSERT ����Ѥ���";
$GLOBALS['strCompatibilityMode']		= "�ǡ����١����ߴ��⡼�ɤ���Ѥ���";
$GLOBALS['strCantConnectToDb']			= "�ǡ����١�������³�Ǥ��ޤ���";



// Invocation and Delivery
$GLOBALS['strInvocationAndDelivery']		= "Invocation and delivery settings";

$GLOBALS['strAllowedInvocationTypes']		= "Allowed invocation types";
$GLOBALS['strAllowRemoteInvocation']		= "Allow Remote Invocation";
$GLOBALS['strAllowRemoteJavascript']		= "Allow Remote Invocation for Javascript";
$GLOBALS['strAllowRemoteFrames']		= "Allow Remote Invocation for Frames";
$GLOBALS['strAllowRemoteXMLRPC']		= "Allow Remote Invocation using XML-RPC";
$GLOBALS['strAllowLocalmode']			= "������⡼�ɤ���Ĥ���";
$GLOBALS['strAllowInterstitial']		= "Allow Interstitials";
$GLOBALS['strAllowPopups']			= "�ݥåץ��åפ���Ĥ���";

$GLOBALS['strUseAcl']				= "Evaluate delivery limitations during delivery";

$GLOBALS['strDeliverySettings']			= "��������";
$GLOBALS['strCacheType']				= "��������å���μ���";
$GLOBALS['strCacheFiles']				= "�ե�����";
$GLOBALS['strCacheDatabase']			= "�ǡ����١���";
$GLOBALS['strCacheShmop']				= "��ͭ����/Shmop";
$GLOBALS['strCacheSysvshm']				= "��ͭ����/Sysvshm";
$GLOBALS['strExperimental']				= "�¸�";
$GLOBALS['strKeywordRetrieval']			= "������ɼ���";
$GLOBALS['strBannerRetrieval']			= "�Хʡ�������ˡ";
$GLOBALS['strRetrieveRandom']			= "������Хʡ����� (�ǥե����)";
$GLOBALS['strRetrieveNormalSeq']		= "���̤ν缡�Хʡ�����";
$GLOBALS['strWeightSeq']			= "�Ťߥ١����ν缡�Хʡ�����";
$GLOBALS['strFullSeq']				= "�����ʽ缡�Хʡ�����";
$GLOBALS['strUseConditionalKeys']		= "Allow logical operators when using direct selection";
$GLOBALS['strUseMultipleKeys']			= "Allow multiple keywords when using direct selection";

$GLOBALS['strZonesSettings']			= "���������";
$GLOBALS['strZoneCache']			= "Cache zones, this should speed things up when using zones";
$GLOBALS['strZoneCacheLimit']			= "Time between cache updates (in seconds)";
$GLOBALS['strZoneCacheLimitErr']		= "Time between cache updates should be a positive integer";

$GLOBALS['strP3PSettings']			= "P3P �ץ饤�Х����ݥꥷ��";
$GLOBALS['strUseP3P']				= "P3P �ݥꥷ����Ȥ�";
$GLOBALS['strP3PCompactPolicy']			= "P3P ����ѥ��ȥݥꥷ��";
$GLOBALS['strP3PPolicyLocation']		= "P3P ����ϥݥꥷ��"; 



// Banner Settings
$GLOBALS['strBannerSettings']			= "�Хʡ�����";

$GLOBALS['strAllowedBannerTypes']		= "�Хʡ��μ������Ĥ���";
$GLOBALS['strTypeSqlAllow']			= "������Хʡ�(SQL)����Ĥ���";
$GLOBALS['strTypeWebAllow']			= "������Хʡ�(�����֥����С�)����Ĥ���";
$GLOBALS['strTypeUrlAllow']			= "�����Хʡ�����Ĥ���";
$GLOBALS['strTypeHtmlAllow']			= "HTML �Хʡ�����Ĥ���";
$GLOBALS['strTypeTxtAllow']			= "�ƥ����ȹ������Ĥ���";

$GLOBALS['strTypeWebSettings']			= "������Хʡ�(�����֥����С�)����";
$GLOBALS['strTypeWebMode']			= "��������ˡ";
$GLOBALS['strTypeWebModeLocal']			= "������ǥ��쥯�ȥ�";
$GLOBALS['strTypeWebModeFtp']			= "���� FTP �����С�";
$GLOBALS['strTypeWebDir']			= "������ǥ��쥯�ȥ�";
$GLOBALS['strTypeWebFtp']			= "FTP �⡼�ɥ����֥Хʡ������С�";
$GLOBALS['strTypeWebUrl']			= "���� URL";
$GLOBALS['strTypeFTPHost']			= "FTP �ۥ���";
$GLOBALS['strTypeFTPDirectory']			= "�ۥ��ȥǥ��쥯�ȥ�";
$GLOBALS['strTypeFTPUsername']			= "������̾";
$GLOBALS['strTypeFTPPassword']			= "�ѥ����";
$GLOBALS['strTypeFTPErrorDir']			= "�ۥ��ȤΥǥ��쥯�ȥ꤬¸�ߤ��ޤ���";
$GLOBALS['strTypeFTPErrorConnect']		= "FTP �����С�����³�Ǥ��ޤ��󡣥�����̾���ѥ���ɤ�����������ޤ���";
$GLOBALS['strTypeFTPErrorHost']			= "FTP�����С��Υۥ���̾�����ΤǤϤ���ޤ���";
$GLOBALS['strTypeDirError']				= "������ǥ��쥯�ȥ꤬¸�ߤ��ޤ���";

$GLOBALS['strDefaultBanners']			= "�ǥե���ȥХʡ�";
$GLOBALS['strDefaultBannerUrl']			= "�ǥե���Ȳ��� URL";
$GLOBALS['strDefaultBannerTarget']		= "Default destination URL";

$GLOBALS['strTypeHtmlSettings']			= "HTML �Хʡ����ץ����";
$GLOBALS['strTypeHtmlAuto']			= "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']			= "Allow PHP expressions to be executed from within a HTML banner";

$GLOBALS['strCookieSettings']			= "Cookie ����";
$GLOBALS['strPackCookies']				= "Pack cookies to avoid cookie overpopulation";



// Host information and Geotargeting
$GLOBALS['strHostAndGeo']				= "Host information and Geotargeting";

$GLOBALS['strRemoteHost']				= "��⡼�ȥۥ���";
$GLOBALS['strReverseLookup']			= "Try to determine the hostname of the visitor if it is not supplied by the server";
$GLOBALS['strProxyLookup']				= "Try to determine the real IP address of the visitor if he is using a proxy server";

$GLOBALS['strGeotargeting']				= "Geotargeting";
$GLOBALS['strGeotrackingType']			= "Type of geotargeting database";
$GLOBALS['strGeotrackingLocation'] 		= "Geotargeting database location";
$GLOBALS['strGeotrackingLocationError'] = "The geotargeting database does not exist in the location you specified";
$GLOBALS['strGeotrackingLocationNoHTTP']	= "The location you supplied is not a local directory on the hard drive of the server, but an URL to a file on a webserver. The location should look similar to this: <i>{example}</i>. The actual location depends on where you copied the database.";
$GLOBALS['strGeotrackingUnsupportedDB'] = "The geotargeting database supplied is not supported by this plug-in";
$GLOBALS['strGeoStoreCookie']			= "����λ����Ѥ� Cookie �˷�̤���¸����";



// Statistics Settings
$GLOBALS['strStatisticsSettings']		= "��������";

$GLOBALS['strStatisticsFormat']			= "���פη���";
$GLOBALS['strCompactStats']				= "���פη���";
$GLOBALS['strLogAdviews']				= "�Хʡ����������뤿�Ӥ� adView ��Ͽ����";
$GLOBALS['strLogAdclicks']				= "�Хʡ���ˬ��Ԥ�����å����뤿�Ӥ� AdClick ��Ͽ����";
$GLOBALS['strLogSource']				= "Log the source parameter specified during invocation";
$GLOBALS['strGeoLogStats']				= "���פ�ˬ��Ԥι��Ͽ����";
$GLOBALS['strLogHostnameOrIP']			= "ˬ��Ԥ� IP ���ɥ쥹�ޤ��ϥۥ���̾��Ͽ����";
$GLOBALS['strLogIPOnly']				= "�ۥ���̾��ʬ���äƤ�ˬ��Ԥ� IP ���ɥ쥹�Τߵ�Ͽ����";
$GLOBALS['strLogIP']					= "ˬ��Ԥ� IP ���ɥ쥹��Ͽ����";
$GLOBALS['strLogBeacon']				= "Use a small beacon image to log AdViews to ensure only delivered banners are logged";

$GLOBALS['strRemoteHosts']				= "��⡼�ȥۥ���";
$GLOBALS['strIgnoreHosts']				= "Don't store statistics for visitors using one of the following IP addresses or hostnames";
$GLOBALS['strBlockAdviews']				= "Don't log AdViews if the visitor already seen the same banner within the specified number of seconds";
$GLOBALS['strBlockAdclicks']			= "Don't log AdClicks if the visitor already clicked on the same banner within the specified number of seconds";


$GLOBALS['strPreventLogging']			= "���ε�Ͽ��˸��";
$GLOBALS['strEmailWarnings']			= "�Żҥ᡼��ηٹ�";
$GLOBALS['strAdminEmailHeaders']		= "Add the following headers to each e-mail message sent by ".$phpAds_productname;
$GLOBALS['strWarnLimit']				= "Send a warning when the number of impressions left are less than specified here";
$GLOBALS['strWarnLimitErr']				= "���¤������Ǥʤ���Фʤ�ʤ��ȷٹ𤹤�";
$GLOBALS['strWarnAdmin']				= "Send a warning to the administrator every time a campaign is almost expired";
$GLOBALS['strWarnClient']				= "Send a warning to the advertiser every time a campaign is almost expired";
$GLOBALS['strQmailPatch']				= "qmail �ѥå���ͭ���ˤ���";

$GLOBALS['strAutoCleanTables']			= "�ǡ����١����ν���";
$GLOBALS['strAutoCleanStats']			= "���פ�����";
$GLOBALS['strAutoCleanUserlog']			= "�桼�����Υ�������";
$GLOBALS['strAutoCleanStatsWeeks']		= "���פκ������ <br>(�Ǿ� 3 ����)";
$GLOBALS['strAutoCleanUserlogWeeks']	= "�桼�������κ������ <br>(�Ǿ� 3 ����)";
$GLOBALS['strAutoCleanErr']				= "������֤ϡ����ʤ��Ȥ� 3 ���֤ʤ���Фʤ�ޤ���";
$GLOBALS['strAutoCleanVacuum']			= "���եơ��֥�� VACUUM ANALYZE ����"; // only Pg


// Administrator settings
$GLOBALS['strAdministratorSettings']		= "����������";

$GLOBALS['strLoginCredentials']			= "Login credentials";
$GLOBALS['strAdminUsername']			= "�����ԤΥ桼����̾";
$GLOBALS['strInvalidUsername']			= "̵���ʥ桼����̾";

$GLOBALS['strBasicInformation']			= "���ܾ���";
$GLOBALS['strAdminFullName']			= "�ե�͡���";
$GLOBALS['strAdminEmail']			= "�Żҥ᡼�륢�ɥ쥹";
$GLOBALS['strCompanyName']			= "���̾";

$GLOBALS['strAdminCheckUpdates']		= "���åץǡ��Ȥ��ǧ����";
$GLOBALS['strAdminCheckEveryLogin']		= "��������";
$GLOBALS['strAdminCheckDaily']			= "����";
$GLOBALS['strAdminCheckWeekly']			= "�轵";
$GLOBALS['strAdminCheckMonthly']		= "���";
$GLOBALS['strAdminCheckNever']			= "���ʤ�";
$GLOBALS['strAdminCheckDevBuilds']		= "������꡼�����줿��ȯ�С������Υץ��ץ�";

$GLOBALS['strAdminNovice']			= "�����Ԥκ�����������ϡ��������Τ���γ�ǧ��ɬ�פȤ���";
$GLOBALS['strUserlogEmail']			= "���٤Ƥ��Żҥ᡼���å�������������Ͽ����";
$GLOBALS['strUserlogPriority']			= "��������ͥ���٤η׻���Ͽ����";
$GLOBALS['strUserlogAutoClean']			= "��ư�ǥǡ����١����Υ��꡼�˥󥰤�Ͽ����";


// User interface settings
$GLOBALS['strGuiSettings']			= "�桼�������󥿡��ե���������";

$GLOBALS['strGeneralSettings']			= "��������";
$GLOBALS['strAppName']				= "���ץꥱ�������̾";
$GLOBALS['strMyHeader']				= "�إå����ե�����ξ��";
$GLOBALS['strMyHeaderError']		= "����ξ��˥إå����ե������¸�ߤ��ޤ���";
$GLOBALS['strMyFooter']				= "�եå����ե�����ξ��";
$GLOBALS['strMyFooterError']		= "����ξ��˥եå����ե������¸�ߤ��ޤ���";
$GLOBALS['strGzipContentCompression']		= "����ƥ�Ĥ� GZIP ���̤���Ѥ���";

$GLOBALS['strClientInterface']			= "����祤�󥿡��ե�����";
$GLOBALS['strClientWelcomeEnabled']		= "����紿�ޥ�å�������ͭ���ˤ���";
$GLOBALS['strClientWelcomeText']		= "���ޥ�å�����<br>(HTML �����ϵ��Ĥ���ޤ�)";



// Interface defaults
$GLOBALS['strInterfaceDefaults']		= "���󥿡��ե������Υǥե����";

$GLOBALS['strInventory']			= "Inventory";
$GLOBALS['strShowCampaignInfo']			= "<i>�����ڡ�����</i>�ڡ����Τ���¾�Υ����ڡ�������ɽ������";
$GLOBALS['strShowBannerInfo']			= "<i>�Хʡ�����</i>�ڡ����Τ���¾�ΥХʡ������ɽ������";
$GLOBALS['strShowCampaignPreview']		= "<i>�Хʡ�����</i>�ڡ����Τ��٤ƤΥХʡ��Υץ�ӥ塼��ɽ������";
$GLOBALS['strShowBannerHTML']			= "HTML �Хʡ��ץ�ӥ塼�Τ�������̤� HTML �����ɤ��Ѥ��˼ºݤΥХʡ���ɽ������";
$GLOBALS['strShowBannerPreview']		= "�Хʡ���ط�����ڡ����ΰ��־�ΥХʡ��ǥץ�ӥ塼����";
$GLOBALS['strHideInactive']			= "���٤Ƥγ��ץڡ������饢���ƥ��֤Ǥʤ����ܤ򱣤�";
$GLOBALS['strGUIShowMatchingBanners']		= "<i>��󥯺ѥХʡ�</i>�ڡ����ΥХʡ��ΰ��פ�ɽ������";
$GLOBALS['strGUIShowParentCampaigns']		= "<i>��󥯺ѥХʡ�</i>�ڡ����οƥ����ڡ����ɽ������";
$GLOBALS['strGUILinkCompactLimit']		= "Hide non-linked campaigns or banners on the <i>Linked banner</i> pages when there are more than";

$GLOBALS['strStatisticsDefaults'] 		= "����";
$GLOBALS['strBeginOfWeek']			= "���γ���";
$GLOBALS['strPercentageDecimals']		= "Percentage Decimals";

$GLOBALS['strWeightDefaults']			= "�ǥե���ȤνŤ�";
$GLOBALS['strDefaultBannerWeight']		= "�Хʡ��Υǥե���ȤνŤ�";
$GLOBALS['strDefaultCampaignWeight']		= "�����ڡ���Υǥե���ȤνŤ�";
$GLOBALS['strDefaultBannerWErr']		= "�Хʡ��Υǥե���ȤνŤߤ������Ǥʤ���Фʤ�ޤ���";
$GLOBALS['strDefaultCampaignWErr']		= "�����ڡ���Υǥե���ȤνŤߤ������Ǥʤ���Фʤ�ޤ���";



// Not used at the moment
$GLOBALS['strTableBorderColor']			= "�ơ��֥�ζ�������";
$GLOBALS['strTableBackColor']			= "�ơ��֥���طʿ�";
$GLOBALS['strTableBackColorAlt']		= "�ơ��֥���طʿ� (�ڤ��ؤ�)";
$GLOBALS['strMainBackColor']			= "�ᥤ���طʿ�";
$GLOBALS['strOverrideGD']			= "GD Imageformat ���񤭤���";
$GLOBALS['strTimeZone']				= "�����ॾ����";

?>