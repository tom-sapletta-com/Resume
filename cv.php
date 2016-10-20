<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 18.10.2016
 * Time: 11:17
 */

require __DIR__ . '/vendor/autoload.php';


if (empty($_GET['lang'])) {
//    header("Location: doc.php?lang=en");
    header("Location: cv.php?lang=en");
}

//$data = [];
//$data['lang'] = 'en';
//new App\Cv($data);
try {
    new App\Cv($_GET);
} catch (Exception $e) {
    new \Phunc\addDebugError('CV_NOT_WORKING', $e);
    include('Public' . DIRECTORY_SEPARATOR . 'error' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'index.php');
}