<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Resume\getValueOfType;

/**
 * Test Class getValueOfTypeTest
 * Base Class getValueOfType
 */
class getValueOfTypeTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new getValueOfType();
        $foo = true;
        $this->assertTrue($foo);
    }
}
