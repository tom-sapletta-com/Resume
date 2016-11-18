<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 18.10.2016
 * Time: 18:37
 */


namespace Resume;

use Phunc\HasString;
use Phunc\ValueText;
use Phunc\Items;
use Exception;
use Resume\LoadFileYaml;

/**
 * Class getConfigValue
 * @package App
 */
class getConfigValue implements ValueText, HasString, Items
{

    protected $items;
    protected $name = '';
    private $value = '';

    /**
     * get file from path on local filesystem
     *
     * @param $name
     * @param LoadFileYaml $file_yaml
     * @throws Exception
     */
    public function __construct($name, LoadFileYaml $file_yaml)
    {
        $this->items = $file_yaml->items();
        $this->name = $name;

        if (empty($name)) {
            throw new Exception(__CLASS__ . ' Empty $name');
        }

        if (empty($this->items[$name])) {
            throw new Exception(__CLASS__ . ' Config Name not exist');
        }

        $this->value = $this->items[$name];
    }

    /**
     * @return LoadFileYaml
     */
    public function items()
    {
        return $this->items;
    }

    /**
     * @return array
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value();
    }
}