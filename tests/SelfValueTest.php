<?php
namespace tests;

use extas\components\values\SelfValue;
use PHPUnit\Framework\TestCase;

/**
 * Class SelfValueTest
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class SelfValueTest extends TestCase
{
    public function testBuild()
    {
        $value = new SelfValue([SelfValue::FIELD__REPLACES => ['value' => 'test']]);
        $this->assertEquals('test', $value->build('@value'));

        $this->expectExceptionMessage('Invalid fields values');
        $value->build([]);
    }
}
