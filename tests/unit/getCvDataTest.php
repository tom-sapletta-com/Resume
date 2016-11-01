
<?php

/**
 * Project: Phunc\getCvData,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Resume\getCvData;

/**
 * Test Class getCvDataTest
 * Base Class getCvData
 */
class getCvDataTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new getCvData();
        $foo = true;
        $this->assertTrue($foo);
    }
}
