
<?php

/**
 * Project: Phunc\getConfigValue,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Resume\getConfigValue;

/**
 * Test Class getConfigValueTest
 * Base Class getConfigValue
 */
class getConfigValueTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new getConfigValue();
        $foo = true;
        $this->assertTrue($foo);
    }
}
