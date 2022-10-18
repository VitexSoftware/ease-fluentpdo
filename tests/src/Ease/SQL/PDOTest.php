<?php

namespace Test\Ease\SQL;

use Ease\SQL\PDO;
use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2020-05-10 at 14:53:04.
 */
class PDOTest extends TestCase {

    /**
     * @var PDO
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new \PDOTester();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }

    /**
     * @covers Ease\SQL\PDO::singleton
     */
    public function testSingleton() {
        $this->assertEquals('Ease\SQL\PDO', get_class($this->object->singleton()));
    }

    /**
     * @covers Ease\SQL\PDO::setKeyColumn
     */
    public function testSetKeyColumn() {
        $this->assertEquals(true, $this->object->setKeyColumn('id'));
    }

    /**
     * @covers Ease\SQL\PDO::setTableName
     * @todo   Implement testSetTableName().
     */
    public function testSetTableName() {
        $this->assertEquals('', $this->object->SetTableName());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers Ease\SQL\PDO::addSlashes
     */
    public function testAddSlashes() {
        $this->assertEquals('\\"', $this->object->addSlashes('"'));
    }

    /**
     * @covers Ease\SQL\PDO::selectDB
     */
    public function testSelectDB() {
        $this->assertEquals('', $this->object->selectDB('test'));
    }

    /**
     * @covers Ease\SQL\PDO::getlastInsertID
     */
    public function testGetlastInsertID() {
        $this->assertEquals('0', $this->object->GetlastInsertID());
    }
    /**
     * @covers Ease\SQL\PDO::arrayToInsertQuery
     */
    public function testArrayToInsertQuery() {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers Ease\SQL\PDO::getColumnComma
     */
    public function testGetColumnComma() {
        $this->assertEquals('', $this->object->GetColumnComma());
    }

    /**
     * @covers Ease\SQL\PDO::close
     */
    public function testClose() {
        $this->assertEquals('', $this->object->Close());
    }

    /**
     * @covers Ease\SQL\PDO::__destruct
     */
    public function test__destruct() {
        $this->assertEquals('', $this->object->__destruct());
    }

    /**
     * @covers Ease\SQL\PDO::__sleep
     */
    public function test__sleep() {
        $this->assertEquals([], $this->object->__sleep());
    }

    /**
     * @covers Ease\SQL\PDO::__wakeup
     */
    public function test__wakeup() {
        $this->assertEquals('', $this->object->__wakeup());
    }

}
