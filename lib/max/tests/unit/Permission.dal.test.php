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

require_once MAX_PATH . '/lib/OA/Dal.php';
require_once MAX_PATH . '/lib/max/Permission.php';
require_once MAX_PATH . '/lib/OA/Dal/DataGenerator.php';


/**
 * A class for testing DAL Permission methods
 *
 * @package    Max
 * @subpackage TestSuite
 *
 */
class MAX_PermissionTest extends UnitTestCase
{

    /**
     * The constructor method.
     */
    function MAX_PermissionTest()
    {
        $this->UnitTestCase();
    }

    function setUp()
    {

    }

    function tearDown()
    {
        DataGenerator::cleanUp();
    }

    function testIsUsernameAllowed()
    {
        // Set up the preferences array
        $GLOBALS['pref'] = array();
        $GLOBALS['pref']['admin'] = 'admin';

        // If the names are the same then true
        $this->assertTrue(MAX_Permission::isUsernameAllowed('foo', 'foo'));

        // Don't let a user have the "admin" username
        $this->assertFalse(MAX_Permission::isUsernameAllowed('foo', 'admin'));

        // Check users as client, affiliate, agency
        $doClients = OA_Dal::factoryDO('clients');
        $doClients->clientusername = 'bar';
        $doClients->reportlastdate = '2007-04-02 12:00:00';
        $clientId = DataGenerator::generateOne($doClients);

        $this->assertFalse(MAX_Permission::isUsernameAllowed('foo', 'bar'));

        $doAffiliates = OA_Dal::factoryDO('affiliates');
        $doAffiliates->username = 'baz';
        $affiliateId = DataGenerator::generateOne($doAffiliates);

        $this->assertFalse(MAX_Permission::isUsernameAllowed('foo', 'baz'));

        $doAgency = OA_Dal::factoryDO('agency');
        $doAgency->username = 'quux';
        $agencyId = DataGenerator::generateOne($doAgency);

        $this->assertFalse(MAX_Permission::isUsernameAllowed('foo', 'quux'));

        $this->assertTrue(MAX_Permission::isUsernameAllowed('foo', 'newname'));
    }

    function testGetUniqueUserNames()
    {
         // Set up the preferences array
        $GLOBALS['pref'] = array();
        $GLOBALS['pref']['admin'] = 'admin';

        $expected = array('admin');
        $actual = MAX_Permission::getUniqueUserNames();
        $this->assertEqual($actual, $expected);

        // Insert some users
        $doClients = OA_Dal::factoryDO('clients');
        $doClients->clientusername = 'bar';
        $doClients->reportlastdate = '2007-04-02 12:00:00';
        $clientId = DataGenerator::generateOne($doClients);

        $doAffiliates = OA_Dal::factoryDO('affiliates');
        $doAffiliates->username = 'baz';
        $affiliateId = DataGenerator::generateOne($doAffiliates);

        $doAgency = OA_Dal::factoryDO('agency');
        $doAgency->username = 'quux';
        $agencyId = DataGenerator::generate($doAgency, 2); // Duplicate username

        $expected = array('admin', 'bar', 'baz', 'quux');
        sort($expected);
        $actual = MAX_Permission::getUniqueUserNames();
        sort($actual);
        $this->assertEqual($actual, $expected);
    }

    function testHasAccessToObject()
    {
        $userTables = array(
		    phpAds_Client    => 'clients',
		    phpAds_Affiliate => 'affiliates',
		    phpAds_Agency    => 'agency',
		);

        // Test if all users have access to new objects
        foreach ($userTables as $userType => $userTable) {
            $this->assertTrue(MAX_Permission::hasAccessToObject('banners', null, $userType));
        }
        $this->assertTrue(MAX_Permission::hasAccessToObject('banners', 'booId', phpAds_Admin));

        // Create some record
        $doBanners = OA_Dal::factoryDO('banners');
        $doBanners->acls_updated = '2007-04-05 16:18:00';
        $aData = array(
            'reportlastdate' => array('2007-04-05 16:18:00')
        );
        $dg = new DataGenerator();
        $dg->setData('clients', $aData);
        $aBannerIds = $dg->generate($doBanners, 1, true);
        $bannerId = $aBannerIds[0];
        $clientId = DataGenerator::getReferenceId('clients');
        $affiliateId = DataGenerator::getReferenceId('affiliates');
        $agencyId = DataGenerator::getReferenceId('agency');
        // Test that admin always has access
        $this->assertTrue(MAX_Permission::hasAccessToObject('banners', 'booId', phpAds_Admin));

        // Test users have access
        $this->assertTrue(MAX_Permission::hasAccessToObject('banners', $bannerId, phpAds_Client, $clientId));
        $this->assertTrue(MAX_Permission::hasAccessToObject('banners', $bannerId, phpAds_Agency, $agencyId));

        // Create users who don't have access
        $doClients = OA_Dal::factoryDO('clients');
        $doClients->reportlastdate = '2007-04-05 16:18:00';
        $clientId2 = DataGenerator::generateOne($doClients);
        $agencyId2 = DataGenerator::generateOne('agency');
        $this->assertFalse(MAX_Permission::hasAccessToObject('banners', $bannerId, phpAds_Affiliate, $fakeId = 123));
        $this->assertFalse(MAX_Permission::hasAccessToObject('banners', $bannerId, phpAds_Client, $clientId2));
        $this->assertFalse(MAX_Permission::hasAccessToObject('banners', $bannerId, phpAds_Agency, $agencyId2));
    }
}
?>