
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . '../vendor' . '/autoload.php';
use PHPUnit\Framework\TestCase;
use Resume\TemplateRow;

/**
 * Test Class TemplateRowTest
 * Base Class TemplateRow
 */
class TemplateRowTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $type_val = $lang = $type = $value = $name = '';
        $object = new TemplateRow($type_val, $lang, $type, $value, $name);
        $foo = true;
        $this->assertTrue($foo);
    }
}
