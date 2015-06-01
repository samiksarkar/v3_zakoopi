<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticlesSorttrendingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticlesSorttrendingsTable Test Case
 */
class ArticlesSorttrendingsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.articles_sorttrendings',
        'app.cities',
        'app.articles',
        'app.article_hits',
        'app.users',
        'app.article_images',
        'app.article_stores',
        'app.stores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ArticlesSorttrendings') ? [] : ['className' => 'App\Model\Table\ArticlesSorttrendingsTable'];
        $this->ArticlesSorttrendings = TableRegistry::get('ArticlesSorttrendings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticlesSorttrendings);

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
