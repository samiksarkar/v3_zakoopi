<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoreOfferingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoreOfferingsTable Test Case
 */
class StoreOfferingsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.store_offerings',
        'app.stores',
        'app.offerings',
        'app.occasions',
        'app.occasions_offerings',
        'app.fabrics',
        'app.store_offerings_fabrics',
        'app.styles',
        'app.store_offerings_styles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StoreOfferings') ? [] : ['className' => 'App\Model\Table\StoreOfferingsTable'];
        $this->StoreOfferings = TableRegistry::get('StoreOfferings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StoreOfferings);

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
