<?php namespace backend\tests;

use Codeception\Test\Unit;
use Codeception\TestCase\Test;
use PHPUnit\Framework\TestResult;

class aaaTest extends \Codeception\Test\Unit
{
    /**
     * @var \backend\tests\UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertEquals('bbbb','bbbb');
        $this->assertTrue(true);
        $this->assertEmpty('');
    }
}