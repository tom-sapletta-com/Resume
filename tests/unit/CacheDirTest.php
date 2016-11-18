
<?php

/**
 * Project: Phunc\CacheDir,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Resume\CacheDir;

/**
 * Test Class CacheDirTest
 * Base Class CacheDir
 */
class CacheDirTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new CacheDir();
        $foo = true;
        $this->assertTrue($foo);
    }
}
