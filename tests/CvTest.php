
<?php

/**
 * Project: Phunc\Cv,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Resume\Cv;

/**
 * Test Class CvTest
 * Base Class Cv
 */
class CvTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new Cv();
        $foo = true;
        $this->assertTrue($foo);
    }
}
