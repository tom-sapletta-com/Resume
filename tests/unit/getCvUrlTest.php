
<?php

/**
 * Project: Phunc\getCvUrl,
 * File created by: tom-sapletta-com, on 2016-11-01 21:02:01
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Phunc\getCvUrl;

/**
 * Test Class getCvUrlTest
 * Base Class getCvUrl
 */
class getCvUrlTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new getCvUrl($param);
        $foo = true;
        $this->assertTrue($foo);
    }
}
