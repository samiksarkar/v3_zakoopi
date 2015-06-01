<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionsSearchAdsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionsSearchAdsTable Test Case
 */
class RegionsSearchAdsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regions_search_ads',
        'app.search_ads',
        'app.regions',
        'app.homepage_ads',
        'app.stores',
        'app.homepage_ads_regions',
        'app.store_ads',
        'app.regions_store_ads'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegionsSearchAds') ? [] : ['className' => 'App\Model\Table\RegionsSearchAdsTable'];
        $this->RegionsSearchAds = TableRegistry::get('RegionsSearchAds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegionsSearchAds);

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
