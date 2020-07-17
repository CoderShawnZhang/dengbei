<?php
namespace app\backend\tests\unit;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestResult;

class CaTest extends \Codeception\Test\Unit
{
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
    }
}