<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 17.10.2016
 * Time: 18:43
 */
namespace Resume;

use phpDocumentor\Reflection\Types\Boolean;
use Phunc\IsLocalhost;
use Phunc\addDebugError;
use Phunc\getPathToDownloadedFile;
use Phunc\PrintLog;

/**
 * Class getCvData
 * @package phunc\cv
 */
class getCvUrl
{
    protected $value;

    /**
     * loading config when use config object
     */
    public function __construct($server_array)
    {
        $is_localhost = new IsLocalhost($server_array);
        if ($is_localhost->value()) {
            $url_data = (string)new getConfigValue('url_data_localhost');
        } else {
            $url_data = (string)new getConfigValue('url_data');
        }
        $this->value = $url_data;
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