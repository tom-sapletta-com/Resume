<?php

use Resume\getConfigValue;
use Resume\getHomePath;

$menu_html = '';
$languages = new getConfigValue('languages');
foreach($languages->value() as $lang) {
    $menu_html .= '<a href="';
    $menu_html .= (string) new getHomePath();
    $menu_html .= '/cv.php?lang=';
    $menu_html .= strtolower($lang);
    $menu_html .= '">';
    $menu_html .= $lang;
    $menu_html .= '</a> |';
}
?>
<div class='menu'>
    <div class='menu-left'>
        <?php echo $menu_html; ?>
    </div>

    <div class='menu-right'>
        <a href="javascript:decode()" title="Decode data" class="decode_button" >Decode private data</a> |
        <a href="javascript:doit()" title="Shortcut: [Ctrl] + [P]" >Print Page</a>
        <!--        <a href="--><?php //echo 'http://'.$config->getHomeUrl(); ?><!--/Public/cv/download/tom.sapletta.com-cv-en-2014-08.pdf" >EN</a> |-->
<!--        <a href="--><?php //echo 'http://'.$config->getHomeUrl(); ?><!--/Public/cv/download/tom.sapletta.com-cv-de-2014-08.pdf" >DE</a> |-->
<!--        <a href="--><?php //echo 'http://'.$config->getHomeUrl(); ?><!--/Public/cv/download/tom.sapletta.com-cv-pl-2014-08.pdf" >PL</a>-->
    </div>
</div>