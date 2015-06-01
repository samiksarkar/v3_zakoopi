<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarketsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarketsTable Test Case
 */
class MarketsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.markets',
        'app.cities',
        'app.articles',
        'app.article_hits',
        'app.users',
        'app.article_images',
        'app.article_stores',
        'app.stores',
        'app.articles_sorttrendings',
        'app.sale_town_markets',
        'app.sale_town_stores',
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
        $config = TableRegistry::exists('Markets') ? [] : ['className' => 'App\Model\Table\MarketsTable'];
        $this->Markets = TableRegistry::get('Markets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Markets);

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
