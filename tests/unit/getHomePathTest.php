
<?php

/**
 * Project: Phunc\getHomePath,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Resume\getHomePath;

/**
 * Test Class getHomePathTest
 * Base Class getHomePath
 */
class getHomePathTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new getHomePath();
        $foo = true;
        $this->assertTrue($foo);
    }
}
