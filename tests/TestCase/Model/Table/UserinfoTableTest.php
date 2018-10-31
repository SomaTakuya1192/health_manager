<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserinfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserinfoTable Test Case
 */
class UserinfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserinfoTable
     */
    public $Userinfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.userinfo',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Userinfo') ? [] : ['className' => UserinfoTable::class];
        $this->Userinfo = TableRegistry::getTableLocator()->get('Userinfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userinfo);

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
