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
//  EN-Revision: 2.1.2.3

// Main strings
$GLOBALS['strChooseSection']			= "�������������";


// Priority
$GLOBALS['strRecalculatePriority']		= "ͥ���٤κƷ׻�";
$GLOBALS['strHighPriorityCampaigns']		= "�⤤�����٤Υ����ڡ���";
$GLOBALS['strAdViewsAssigned']			= "AdViews �������";
$GLOBALS['strLowPriorityCampaigns']		= "��ͥ���٤Υ����ڡ���";
$GLOBALS['strPredictedAdViews']			= "AdViews ��ͽ¬����";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".$phpAds_productname." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "ͽ¬�Ϻ������轵�Υǡ����˴�Ť��ޤ���";
$GLOBALS['strPriorityBasedLastDays']		= "ͽ¬�ϲ�� 2��3���Υǡ����˴�Ť��ޤ���";
$GLOBALS['strPriorityBasedYesterday']		= "ͽ¬�Ϻ����Υǡ����˴�Ť��ޤ��� ";
$GLOBALS['strPriorityNoData']			= "There isn't enough data available to make a reliable prediction about the number of impressions this adserver will generate today. Priority assignments will be based on real time statistics only. ";
$GLOBALS['strPriorityEnoughAdViews']		= "There should be enough AdViews to fully satisfy the target all high priority campaigns. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "It isn't clear wether there will be enough AdViews served today to satisfy the target all high priority campaigns. ";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "�Хʡ�����å����ƹ��ۤ���";
$GLOBALS['strBannerCacheExplaination']		= "
	The banner cache contains a copy of the HTML code which is used to display the banner. By using a banner cache it is possible to speed
	up the delivery of banners because the HTML code doesn't need to be generated every time a banner is being delivered. Because the
	banner cache contains hard coded URLs to the location of ".$phpAds_productname." and its banners, the cache needs to be updated
	everytime ".$phpAds_productname." is moved to another location on the webserver.
";


// Cache
$GLOBALS['strCache']			= "�ۿ�����å���";
$GLOBALS['strAge']				= "Age";
$GLOBALS['strRebuildDeliveryCache']			= "�ۿ�����å���κƹ���";
$GLOBALS['strDeliveryCacheExplaination']		= "
	�ۿ�����å���ϥХʡ����ۿ��Υ��ԡ��ɥ��åפ˻��Ѥ���ޤ���The cache contains a copy of all the banners
	which are linked to the zone which saves a number of database queries when the banners are actually delivered to the user. The cache
	is usually rebuild everytime a change is made to the zone or one of it's banners, it is possible the cache will become outdated.
	���Τ���ˡ�����å���ϼ�ưŪ������ֺƹ��ۤ���Ǥ��礦��������������˥���å�����ư�Ǻƹ��ۤ��뤳�Ȥ��Ǥ��ޤ���
";
$GLOBALS['strDeliveryCacheSharedMem']		= "
	��ͭ����ϡ��ۿ�����å���γ�Ǽ�˸��߻��Ѥ���Ƥ��ޤ���
";
$GLOBALS['strDeliveryCacheDatabase']		= "
	�ǡ����١����ϡ��ۿ�����å���γ�Ǽ�˸��߻��Ѥ���Ƥ��ޤ���
";
$GLOBALS['strDeliveryCacheFiles']		= "
	�ۿ�����å���ϸ��ߥ����С����ʣ���Υե�����˳�Ǽ����Ƥ��ޤ���
";


// Storage
$GLOBALS['strStorage']				= "���ȥ졼��";
$GLOBALS['strMoveToDirectory']			= "Move images stored inside the database to a directory";
$GLOBALS['strStorageExplaination']		= "
	The images used by local banners are stored inside the database or stored in a directory. If you store the images inside 
	a directory the load on the database will be reduced and this will lead to a increase in speed.
";


// Storage
$GLOBALS['strStatisticsExplaination']		= "
	You have enabled the <i>compact statistics</i>, but your old statistics are still in verbose format. 
	Do you want to convert your verbose statistics to the new compact format?
";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "���åץǡ��Ȥ򸡺����Ƥ��ޤ����ä����Ԥ���������...";
$GLOBALS['strAvailableUpdates']			= "���Ѳ�ǽ�ʥ��åץǡ���";
$GLOBALS['strDownloadZip']			= "��������ɤ��� (.zip)";
$GLOBALS['strDownloadGZip']			= "��������ɤ��� (.tar.gz)";

$GLOBALS['strUpdateAlert']			= $phpAds_productname . "�ο����С���������Ѳ�ǽ�Ǥ���                 \\n\\n���Υ��åץǡ��ȤΤ��ܺ٤�\\n�������ޤ���?";
$GLOBALS['strUpdateAlertSecurity']		= $phpAds_productname . "�ο����С���������Ѳ�ǽ�Ǥ���                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "
    Due to an unknown reason it isn't possible to retrieve <br>
	information about possible updates. Please try again later.
";

$GLOBALS['strNoNewVersionAvailable']		= "
	".$phpAds_productname." �ΥС������򥢥åץǡ��Ȥ��ޤ������������ѤǤ���ϥ��åץǡ��ȤϤ���ޤ���";

$GLOBALS['strNewVersionAvailable']		= "
	<b>".$phpAds_productname." �ο������С���������Ѳ�ǽ�Ǥ���</b><br> �����Ĥ��θ��ߴ�¸��������褹�뤫�⤷��ʤ����Ȥȡ�����ǽ���ɲä�����Ƥ���Τǡ����ι����Υ��󥹥ȡ��뤬�侩����ޤ���
    ���åץ��졼�ɤ˴ؤ�����ܺ٤ʾ���ϲ����Υե�����˴ޤޤ��ɥ�����Ȥ��ɤ�Ǥ���������
";

$GLOBALS['strSecurityUpdate']			= "
	<b>�����Ĥ��Υ������ƥ��ν�����ޤ�١��Ǥ�������᤯���ι����򥤥󥹥ȡ��뤹�뤳�Ȥ��⤯�侩����ޤ���</b>
	���߻��Ѥ��Ƥ��� ".$phpAds_productname." �ΥС������Ϥ��빶����ȼ夫�⤷��ʤ��������餯�����ǤϤ���ޤ���
    ���åץ��졼�ɤ˴ؤ�����ܺ٤ʾ���ϲ����Υե�����˴ޤޤ��ɥ�����Ȥ��ɤ�Ǥ���������
";

$GLOBALS['strNotAbleToCheck']			= "
	<b>Because the XML extention isn't available on your server, ".$phpAds_productname." is not
    able to check if a newer version is available.</b>
";

$GLOBALS['strForUpdatesLookOnWebsite']	= "
	���Ѳ�ǽ�ʤ�꿷�����С�����󤬤��뤫�ɤ����Τꤿ����硢�����֥����Ȥ򸫤Ƥ���������
";

$GLOBALS['strClickToVisitWebsite']		= "�����֥����Ȥ�ˬ�䤹��٤ˤ����򥯥�å����ޤ�";
$GLOBALS['strCurrentlyUsing'] 			= "����";
$GLOBALS['strRunningOn']				= "�򼡤δĶ��Ǽ¹���:";
$GLOBALS['strAndPlain']					= "��";


// Stats conversion
$GLOBALS['strConverting']			= "�Ѵ���";
$GLOBALS['strConvertingStats']			= "���פ��Ѵ���...";
$GLOBALS['strConvertStats']			= "���פ��Ѵ�����";
$GLOBALS['strConvertAdViews']			= "AdViews ���Ѵ����ޤ�����";
$GLOBALS['strConvertAdClicks']			= "AdClicks ���Ѵ���...";
$GLOBALS['strConvertNothing']			= "�ʤˤ��Ѵ����ޤ���...";
$GLOBALS['strConvertFinished']			= "��λ���ޤ���...";

$GLOBALS['strConvertExplaination']		= "
	You are currently using the compact format to store your statistics, but there are <br>
	still some statistics in verbose format. As long as the verbose statistics aren't  <br>
	converted to compact format they will not be used while viewing these pages.  <br>
	Before converting your statistics, make a backup of the database!  <br>
	Do you want to convert your verbose statistics to the new compact format? <br>
";

$GLOBALS['strConvertingExplaination']		= "
	All remaining verbose statistics are now being converted to the compact format. <br>
	Depending on how many impressions are stored in verbose format this may take a  <br>
	couple of minutes. Please wait until the conversion is finished before you visit other <br>
	pages. Below you will see a log of all modification made to the database. <br>
";

$GLOBALS['strConvertFinishedExplaination']  	= "
	The conversion of the remaining verbose statistics was succesful and the data <br>
	should now be usable again. Below you will see a log of all modification made <br>
	to the database.<br>
";


?>