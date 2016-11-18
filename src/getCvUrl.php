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
use Resume\getConfigValue;
use Resume\LoadFileYaml;

/**
 * Class getCvData
 * @package phunc\cv
 */
class getCvUrl
{
    protected $value;

    /**
     * loading config when use config object
     *
     * @param IsLocalhost $is_localhost
     * @param LoadFileYaml $file_yaml
     */
    public function __construct(IsLocalhost $is_localhost, LoadFileYaml $file_yaml)
    {

        if ($is_localhost->value()) {
            $url_data = (string)new getConfigValue('url_data_localhost', $file_yaml);
        } else {
            $url_data = (string)new getConfigValue('url_data', $file_yaml);
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