<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionsStoreAdsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionsStoreAdsTable Test Case
 */
class RegionsStoreAdsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regions_store_ads',
        'app.store_ads',
        'app.regions',
        'app.homepage_ads',
        'app.stores',
        'app.homepage_ads_regions',
        'app.search_ads',
        'app.regions_search_ads'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegionsStoreAds') ? [] : ['className' => 'App\Model\Table\RegionsStoreAdsTable'];
        $this->RegionsStoreAds = TableRegistry::get('RegionsStoreAds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegionsStoreAds);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
