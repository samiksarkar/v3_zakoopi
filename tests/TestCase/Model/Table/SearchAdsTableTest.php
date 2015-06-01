<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SearchAdsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SearchAdsTable Test Case
 */
class SearchAdsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.search_ads',
        'app.stores',
        'app.regions',
        'app.homepage_ads',
        'app.homepage_ads_regions',
        'app.regions_search_ads',
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
        $config = TableRegistry::exists('SearchAds') ? [] : ['className' => 'App\Model\Table\SearchAdsTable'];
        $this->SearchAds = TableRegistry::get('SearchAds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SearchAds);

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
