<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticleLikesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticleLikesTable Test Case
 */
class ArticleLikesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.article_likes',
        'app.articles',
        'app.cities',
        'app.articles_sorttrendings',
        'app.markets',
        'app.sale_town_markets',
        'app.sale_town_stores',
        'app.stores',
        'app.brands',
        'app.homepage_ads',
        'app.regions',
        'app.homepage_ads_regions',
        'app.search_ads',
        'app.regions_search_ads',
        'app.store_ads',
        'app.regions_store_ads',
        'app.report_errors',
        'app.users',
        'app.article_hits',
        'app.lookbookcomments',
        'app.lookbooks',
        'app.cards',
        'app.lookbooklikes',
        'app.store_ratings',
        'app.store_reviews',
        'app.user_checkins',
        'app.user_favourites',
        'app.sale_hot_deals',
        'app.sale_town_deals',
        'app.store_cards',
        'app.store_images',
        'app.store_offerings',
        'app.offerings',
        'app.occasions',
        'app.occasions_offerings',
        'app.fabrics',
        'app.store_offerings_fabrics',
        'app.styles',
        'app.store_offerings_styles',
        'app.synonyms',
        'app.trends',
        'app.trend_cities',
        'app.trend_offerings',
        'app.article_images',
        'app.article_stores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ArticleLikes') ? [] : ['className' => 'App\Model\Table\ArticleLikesTable'];
        $this->ArticleLikes = TableRegistry::get('ArticleLikes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticleLikes);

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
