
<?php

/**
 * Project: Phunc\getHomePath,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Resume\getHomePath;
use Phunc\IsLocalhost;
use Phunc\getUrl;

/**
 * Test Class getHomePathTest
 * Base Class getHomePath
 */
class getHomePathTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $default_lang = 'en';
        $server_array['HTTP_HOST'] = 'localhost';
        $server_array['SCRIPT_NAME'] = 'localhost';

        $is_localhost = new IsLocalhost($server_array);
        $url = (string)new getUrl($server_array);

        $object = new getHomePath($default_lang, $is_localhost, $url);
        $foo = true;
        $this->assertTrue($foo);
    }
}
