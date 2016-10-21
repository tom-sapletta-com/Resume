<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 18.10.2016
 * Time: 11:17
 */

// Turn on all error reporting
//error_reporting(E_ALL);
//error_reporting(0);
//ini_set('display_errors', '0');
@ini_set('display_errors', 'on');
define('_PS_MODE_DEV_', true);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';
//var_dump(__DIR__);
if (empty($_GET['lang'])) {
//    header("Location: cv.php?lang=en");
    $_GET['lang'] = "en";
}

require __DIR__ . '/src/Cv.php';

try {
    new \Resume\Cv($_GET);
} catch (Exception $e) {
    new \Phunc\addDebugError('CV_NOT_WORKING', $e);
    include('Public' . DIRECTORY_SEPARATOR . 'error' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'index.php');
}
