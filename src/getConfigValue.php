<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 18.10.2016
 * Time: 18:37
 */


namespace Resume;

//use phunc\core;
use Phunc\HasString;
use Phunc\ValueText;

/**
 * Class getConfigValue
 * @package App
 */
class getConfigValue implements ValueText, HasString
{

    protected $config = [];
    protected $name = '';
    private $value = '';

    /**
     * getConfigValue constructor.
     * @param $name
     * @throws Exception
     */
    public function __construct($name)
    {
        // get file from path on local filesystem
        $config_path = __DIR__ . DIRECTORY_SEPARATOR .
            '..' . DIRECTORY_SEPARATOR .
            'Private' . DIRECTORY_SEPARATOR .
            'Data' . DIRECTORY_SEPARATOR .
            'cv' . DIRECTORY_SEPARATOR .
            'app.yaml';

        if (empty($config_path)) {
//            throw new Exception(__CLASS__ . ' Empty $config');
            return;

        }
        $config = \Spyc::YAMLLoad($config_path);

        if (empty($config)) {
//            throw new Exception(__CLASS__ . ' Empty $config');
            return;
        }

        $this->config = $config;
        $this->name = $name;

        if (empty($name)) {
//            throw new Exception(__CLASS__ . ' Empty $name');
            return;
        }

        if (empty($this->config[$name])) {
//            throw new Exception(__CLASS__ . ' Config Name not exist');
            return;
        }

        $this->value = $this->config[$name];
    }

    /**
     * @return array
     */
    public function config()
    {
        return $this->config;
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