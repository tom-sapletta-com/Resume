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
class getCvData
{
    protected $value;

    /**
     * loading config when use config object
     *
     * @param $file_yaml
     */
    public function __construct(LoadFileYaml $file_yaml, $url_data)
    {
        try {
//            $url_data = (string)new getHomePath() . (string)new CacheDir();
            $cache_dir = (string)new CacheDir();
            $url_data = str_replace('/', DIRECTORY_SEPARATOR, $url_data);

            $cv_file = (string)new getConfigValue('cv', $file_yaml);

            $pathfile = (string)new getPathToDownloadedFile($cv_file, $cache_dir, $url_data);

            $this->value = \Spyc::YAMLLoad($pathfile);

        } catch (Exception $e) {
            new addDebugError(__CLASS__, $e);
            echo new PrintLog($this);
        }

        if (empty($this->cv)) {
            new addDebugError('FILE_REMOTE_NOT_LOADED');
            echo new PrintLog($this);
            return false;
        }
        return true;
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