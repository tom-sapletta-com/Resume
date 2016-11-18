<?php

use Resume\getConfigValue;
use Resume\getHomePath;
use Resume\LoadFileYaml;
use Phunc\getUrl;
use Phunc\IsLocalhost;

/* LANGUAGE */
if(empty($_GET['lang'])){
    $_GET['lang'] = 'en';
}
$current_lang = $_GET['lang'];

$config_path = __DIR__ . DIRECTORY_SEPARATOR .
    '..' . DIRECTORY_SEPARATOR .
    '..' . DIRECTORY_SEPARATOR .
    '..' . DIRECTORY_SEPARATOR .
    'Private' . DIRECTORY_SEPARATOR .
    'Data' . DIRECTORY_SEPARATOR .
    'cv' . DIRECTORY_SEPARATOR .
    'app.yaml';

$file_yaml = new LoadFileYaml($config_path);
$languages = new getConfigValue('languages', $file_yaml);

/* SEPARATOR */
$last = count($languages->value());
$item = 0;

$url = (string)new getUrl($_SERVER);
$is_localhost = new IsLocalhost($_SERVER);
$menu_html = '';
foreach ($languages->value() as $lang) {
    $menu_html .= '<a href="';
    $menu_html .= (string) new getHomePath('en', $is_localhost, $url);
    $menu_html .= '/cv.php?lang=';
    $menu_html .= strtolower($lang);
    $menu_html .= '"';
    if ($current_lang == strtolower($lang)) {
        $menu_html .= ' class="active" ';
    }
    $menu_html .= ' >';

    $menu_html .= $lang;
    $menu_html .= '</a>';

    /* SEPARATOR */
    $item++;
    if ($last > $item) {
        $menu_html .= ' | ';
    }
}
?>
<div class='menu'>
    <div class='menu-left'>
        <?php echo $menu_html; ?>
    </div>

    <div class='menu-right'>
        <a href="javascript:decode()" title="Decode data" class="decode_button">Decode private data</a> |
        <a href="javascript:doit()" title="Shortcut: [Ctrl] + [P]">Print Page</a>
        <!--        <a href="-->
        <?php //echo 'http://'.$config->getHomeUrl(); ?><!--/Public/cv/download/tom.sapletta.com-cv-en-2014-08.pdf" >EN</a> |-->
        <!--        <a href="-->
        <?php //echo 'http://'.$config->getHomeUrl(); ?><!--/Public/cv/download/tom.sapletta.com-cv-de-2014-08.pdf" >DE</a> |-->
        <!--        <a href="-->
        <?php //echo 'http://'.$config->getHomeUrl(); ?><!--/Public/cv/download/tom.sapletta.com-cv-pl-2014-08.pdf" >PL</a>-->
    </div>
</div>