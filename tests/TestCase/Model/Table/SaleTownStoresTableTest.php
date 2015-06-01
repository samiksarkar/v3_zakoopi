<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaleTownStoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaleTownStoresTable Test Case
 */
class SaleTownStoresTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sale_town_stores',
        'app.cities',
        'app.articles',
        'app.article_hits',
        'app.users',
        'app.article_images',
        'app.article_stores',
        'app.stores',
        'app.articles_sorttrendings',
        'app.markets',
        'app.sale_town_markets',
        'app.synonyms',
        'app.trends'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SaleTownStores') ? [] : ['className' => 'App\Model\Table\SaleTownStoresTable'];
        $this->SaleTownStores = TableRegistry::get('SaleTownStores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SaleTownStores);

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
