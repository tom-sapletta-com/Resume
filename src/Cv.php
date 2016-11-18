<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 10.10.2016
 * Time: 22:05
 */

namespace Resume;

use Phunc\UserLanguage;
use Phunc\IsLocalhost;

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
        // Header
        $template_path = __DIR__ . DIRECTORY_SEPARATOR .
            '..' . DIRECTORY_SEPARATOR .
            'Public' . DIRECTORY_SEPARATOR .
            'cv' . DIRECTORY_SEPARATOR .
            'template' . DIRECTORY_SEPARATOR;

        $config_path = __DIR__ . DIRECTORY_SEPARATOR .
            '..' . DIRECTORY_SEPARATOR .
            'Private' . DIRECTORY_SEPARATOR .
            'Data' . DIRECTORY_SEPARATOR .
            'cv' . DIRECTORY_SEPARATOR .
            'app.yaml';

        include($template_path . 'index_header.php');
        include($template_path . 'index_header_menu.php');
        include($template_path . 'index_content.php');

        // get language from variable (path) or set default from config
        $language = new UserLanguage($data);

        $file_yaml = new LoadFileYaml($config_path);

        $is_localhost = new IsLocalhost($_SERVER);

        $url_data = (string)new getCvUrl($is_localhost, $file_yaml);

        $cv = new getCvData($file_yaml, $url_data);
        $render = new docTreeRender($language, $cv->value());
        echo $render->value();

        // Footer
        include($template_path . 'index_footer.php');
    }
}

