<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 17.10.2016
 * Time: 18:43
 */
namespace Resume;

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
     */
    public function __construct()
    {

        $is_localhost = (boolean)new IsLocalhost($_SERVER);
//        if ($is_localhost instanceof ValueBoolean && $is_localhost->value())
//        {
//            $this->url_data = new getHomePath() . $this->folder_data;
//            $cache_dir = new getConfigValue('cache_dir');
//            $url_data = new getConfigValue('url_data');
//            $pathfile = new getPathToDownloadedFile($this->cv, $cache_dir, $url_data);
//            $this->cv = Spyc::YAMLLoad($pathfile);
//        } else {
//
//        }
        try {
            $url_data = (string)new getHomePath() . (string)new CacheDir();
            $cache_dir = (string)new CacheDir();

            if ($is_localhost) {
                $url_data = (string)new getConfigValue('url_data_localhost');
            } else {
                $url_data = (string)new getConfigValue('url_data');
            }

            $url_data = str_replace('/' , DIRECTORY_SEPARATOR, $url_data);

            $cv_file = (string)new getConfigValue('cv');
//                (string)new getConfigValue(CONFIG_APP_PATH, 'cv');

            $pathfile = (string)new getPathToDownloadedFile($cv_file, $cache_dir, $url_data);

            $this->value = \Spyc::YAMLLoad($pathfile);
//            $this->value  = spyc_load_file($pathfile);

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