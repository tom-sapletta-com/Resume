<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 18.10.2016
 * Time: 11:17
 */

// Turn on all error reporting
@ini_set('display_errors', 'on');
define('_PS_MODE_DEV_', true);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';
if (empty($_GET['lang'])) {
//    header("Location: cv.php?lang=en");
    //        $languages = new ConfigLanguages(['pl' => 'Polski', 'en' => 'English', 'de' => 'Deutsch', 'ru' => 'Russian']);
    $locale_arr = explode('-', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $locale = $locale_arr[0];
    $langlist = ['pl' => 'Polski', 'en' => 'English', 'de' => 'Deutsch', 'ru' => 'Russian'];
    if (!empty($langlist[$locale])) {
        $_GET['lang'] = $locale;
    }
    if (empty($_GET['lang'])) {
        $_GET['lang'] = "en";
    }
}

require __DIR__ . '/src/Cv.php';

try {
    new \Resume\Cv($_GET);
} catch (Exception $e) {
    new \Phunc\addDebugError('CV_NOT_WORKING', $e);
    include('Public' . DIRECTORY_SEPARATOR . 'error' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'index.php');
}
