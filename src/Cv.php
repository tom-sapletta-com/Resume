<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 10.10.2016
 * Time: 22:05
 */

namespace Resume;

use Phunc\UserLanguage;
use Phunc\docTreeRender;

/**
 * Class Cv
 *
 */
class Cv
{
    /**
     * Cv constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
//        $languages = new ConfigLanguages(['pl' => 'Polski', 'en' => 'English', 'de' => 'Deutsch', 'ru' => 'Russian']);
        // Header
        $template_path = __DIR__ . DIRECTORY_SEPARATOR .
            '..' . DIRECTORY_SEPARATOR .
            'Public' . DIRECTORY_SEPARATOR .
            'cv' . DIRECTORY_SEPARATOR .
            'template' . DIRECTORY_SEPARATOR;

        include($template_path . 'index_header.php');
        include($template_path . 'index_header_menu.php');
        include($template_path . 'index_content.php');

        // get language from variable (path) or set default from config
        $language = new UserLanguage($data);

        $cv = new getCvData();
        $render = new docTreeRender($language, $cv->value());
        echo $render->value();

        // Footer
        include($template_path . 'index_footer.php');
    }
}

