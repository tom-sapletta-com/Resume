
<?php

/**
 * Project: Phunc\InfoPath,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Resume\InfoPath;

/**
 * Test Class InfoPathTest
 * Base Class InfoPath
 */
class InfoPathTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new InfoPath();
        $foo = true;
        $this->assertTrue($foo);
    }
}
