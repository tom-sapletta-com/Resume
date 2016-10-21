<?php
/**
 * Project: Resume,
 * File created by: tom-sapletta-com, on 20.10.2016, 20:58
 */
require __DIR__ . '/vendor/autoload.php';

$data = [];
$data['lang'] = 'en';
new \Resume\Cv($data);

#php test.php