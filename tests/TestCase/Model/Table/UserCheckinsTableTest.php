<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserCheckinsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserCheckinsTable Test Case
 */
class UserCheckinsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_checkins',
        'app.users',
        'app.stores',
        'app.cities',
        'app.articles',
        'app.article_hits',
        'app.article_images',
        'app.article_stores',
        'app.articles_sorttrendings',
        'app.markets',
        'app.sale_town_markets',
        'app.sale_town_stores',
        'app.synonyms',
        'app.trends',
        'app.trend_cities',
        'app.trend_offerings',
        'app.offerings',
        'app.occasions',
        'app.occasions_offerings',
        'app.brands',
        'app.homepage_ads',
        'app.regions',
        'app.homepage_ads_regions',
        'app.search_ads',
        'app.regions_search_ads',
        'app.store_ads',
        'app.regions_store_ads',
        'app.report_errors',
        'app.sale_hot_deals',
        'app.sale_town_deals',
        'app.store_cards',
        'app.cards',
        'app.lookbooks',
        'app.lookbookcomments',
        'app.lookbooklikes',
        'app.store_images',
        'app.store_offerings',
        'app.fabrics',
        'app.store_offerings_fabrics',
        'app.styles',
        'app.store_offerings_styles',
        'app.store_ratings',
        'app.store_reviews',
        'app.user_favourites'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserCheckins') ? [] : ['className' => 'App\Model\Table\UserCheckinsTable'];
        $this->UserCheckins = TableRegistry::get('UserCheckins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserCheckins);

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
