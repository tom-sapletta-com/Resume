
<?php

/**
 * Project: Resume\LoadFileYaml,
 * File created by: tom-sapletta-com, on 2016-11-15 14:53:56
 */

require_once __DIR__ . '\..\..\vendor' . '\autoload.php';
use PHPUnit\Framework\TestCase;
use Resume\LoadFileYaml;

/**
 * Test Class LoadFileYamlTest
 * Base Class LoadFileYaml
 */
class LoadFileYamlTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $object = new LoadFileYaml('app.yaml');
        $this->assertTrue(is_array($object->items()));
        $this->assertArrayHasKey('template', $object->items());
    }
}
