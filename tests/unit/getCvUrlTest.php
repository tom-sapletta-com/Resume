<?php

/**
 * Project: Phunc\getCvUrl,
 * File created by: tom-sapletta-com, on 2016-11-01 21:02:01
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Resume\getCvUrl;
use Phunc\IsLocalhost;
use Resume\LoadFileYaml;

/**
 * Test Class getCvUrlTest
 * Base Class getCvUrl
 */
class getCvUrlTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $config_path = 'app.yaml';
        $server_array['HTTP_HOST'] = 'localhost';
        $server_array['SCRIPT_NAME'] = 'localhost';
        $is_localhost = new IsLocalhost($server_array);
        $file_yaml = new LoadFileYaml($config_path);

        $object = new getCvUrl($is_localhost, $file_yaml);
        $foo = true;
        $this->assertTrue($foo);
    }
}
