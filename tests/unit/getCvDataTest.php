
<?php

/**
 * Project: Phunc\getCvData,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Phunc\IsLocalhost;

use Resume\getCvData;
use Resume\LoadFileYaml;
use Resume\getCvUrl;

/**
 * Test Class getCvDataTest
 * Base Class getCvData
 */
class getCvDataTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $config_path = 'app.yaml';
        $server_array['HTTP_HOST'] = 'localhost';
        $server_array['SCRIPT_NAME'] = 'localhost';

        $file_yaml = new LoadFileYaml($config_path);
        $is_localhost = new IsLocalhost($server_array);

        $url_data = (string)new getCvUrl($is_localhost, $file_yaml);
        $file_yaml = new LoadFileYaml($config_path);
        $object = new getCvData($file_yaml, $url_data);
        $foo = true;
        $this->assertTrue($foo);
    }
}
