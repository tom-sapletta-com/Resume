<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 15.10.2016
 * Time: 07:23
 */
namespace Resume;

use Phunc\HasString;
use Phunc\ValueText;
use Phunc\getDomain;
use Phunc\IsLocalhost;
use Phunc\getUrl;

/**
 * Class getHomePath
 * @package App
 */
class getHomePath implements HasString, ValueText
{
    private $value = '';

    /**
     * get current language
     * @param $default_lang
     */
    public function __construct($default_lang = 'en', $is_localhost, $url)
    {
        // cut last part: /cv.php
        if (!$is_localhost->value()) {
            $pathi = pathinfo($url);
            $url = $pathi['dirname'];
        }
        $this->value = $url;
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