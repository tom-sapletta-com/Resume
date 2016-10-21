
<?php

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 10:28
 */

require_once __DIR__ . '../vendor' . '/autoload.php';

use PHPUnit\Framework\TestCase;
use Resume\docTreeRender;
use Phunc\ValueLanguage;

/**
 * Test Class docTreeRenderTest
 * Base Class docTreeRender
 */
class docTreeRenderTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $language = new UserLanguage($data);
        $data = [];
        $object = new docTreeRender($language, $data);
        $foo = true;
        $this->assertTrue($foo);
    }
}
