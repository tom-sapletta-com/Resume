
<?php

/**
 * Project: Phunc\getConfigValue,
 * File created by: tom-sapletta-com, on 2016-10-20 21:05:43
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Resume\getConfigValue;
use Resume\LoadFileYaml;

/**
 * Test Class getConfigValueTest
 * Base Class getConfigValue
 */
class getConfigValueTest extends TestCase
{
    public function testTrueIsTrue()
    {
//        $object = new getConfigValue('name', 'path');
//        $this->assertEquals('', $url_data);
        $config_path = 'app.yaml';
        $file_yaml = new LoadFileYaml($config_path);

        $languages = new getConfigValue('languages', $file_yaml);
//        $this->assertEquals([], $languages);

        $cv_file = (string)new getConfigValue('cv', $file_yaml);
//        $this->assertEquals('', $cv_file);

        $url_data = (string)new getConfigValue('url_data_localhost', $file_yaml);
//        $this->assertEquals('', $url_data);

        $url_data = (string)new getConfigValue('url_data', $file_yaml);
//        $this->assertEquals('', $url_data);
    }
}
