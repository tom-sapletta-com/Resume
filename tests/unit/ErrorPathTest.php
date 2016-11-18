
<?php

/**
 * Project: Phunc\ErrorPath,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Resume\ErrorPath;

/**
 * Test Class ErrorPathTest
 * Base Class ErrorPath
 */
class ErrorPathTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new ErrorPath();
        $foo = true;
        $this->assertTrue($foo);
    }
}
