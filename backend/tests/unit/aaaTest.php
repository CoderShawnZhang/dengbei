<?php
namespace backend\tests;

use Codeception\PHPUnit\TestCase;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestResult;

class aaaTest extends TestCase
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
//        Assert::assertTrue(true);
//        Assert::assertEquals('bbbb','bbb1b');
        $this->assertTrue(true);
    }
}