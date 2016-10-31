<?php

use Resume\getConfigValue;
use Resume\getHomePath;

/* LANGUAGE */
$current_lang = $_GET['lang'];
$languages = new getConfigValue('languages');

/* SEPARATOR */
$last = count($languages->value());
$item = 0;

$menu_html = '';
foreach ($languages->value() as $lang) {
    $menu_html .= '<a href="';
    $menu_html .= (string)new getHomePath();
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