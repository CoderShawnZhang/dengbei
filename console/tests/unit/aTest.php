<?php
namespace backend\tests;

use PHPUnit\Framework\Assert;

class aTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
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
        $this->assertTrue(true);
        Assert::assertTrue(true);
    }
}