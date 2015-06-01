<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoreOfferingsStylesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoreOfferingsStylesTable Test Case
 */
class StoreOfferingsStylesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.store_offerings_styles',
        'app.store_offerings',
        'app.stores',
        'app.offerings',
        'app.occasions',
        'app.occasions_offerings',
        'app.fabrics',
        'app.store_offerings_fabrics',
        'app.styles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StoreOfferingsStyles') ? [] : ['className' => 'App\Model\Table\StoreOfferingsStylesTable'];
        $this->StoreOfferingsStyles = TableRegistry::get('StoreOfferingsStyles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StoreOfferingsStyles);

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
