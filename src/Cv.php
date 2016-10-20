<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 10.10.2016
 * Time: 22:05
 */

//defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);


//$config_file =  DS .'Private'. DS .'Data'. DS .'cv'. DS .'app.yaml';

//$config_data = Spyc::YAMLLoad($config_file);

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

//        var_dump($_SERVER['SERVER_NAME']);
//        var_dump($_SERVER);
//        die;
/*
        $is_localhost = new IsLocalhost($_SERVER);
//        var_dump($is_localhost);
//die;
//        $valid_language = new ValidLanguage($language);

        if ($is_localhost instanceof ValueBoolean && $is_localhost->value()) {
//            new SayThatIsLocalhost($language);
        } else {
//            new SayThatIsNotLocalhost($language);
        }
        */
//        $this->lang = new getUserLanguage(); //$this->getLanguage();


        // get Config
//        include_once('Private/Role/guest/configCv.php');

        // Header
//        new phunc\core\renderHtml('Public/cv/template/index_header.php');
        $template_path  = __DIR__ . DIRECTORY_SEPARATOR .
            '..' . DIRECTORY_SEPARATOR .
            'Public' . DIRECTORY_SEPARATOR .
            'cv' . DIRECTORY_SEPARATOR .
            'template' . DIRECTORY_SEPARATOR;

        include($template_path . 'index_header.php');
        include($template_path . 'index_header_menu.php');
        include($template_path . 'index_content.php');

//        $docTreeCv = new docTreeCv($language);
//        var_dump($config->cv);
//        echo $docTreeCv->render($config->cv);
        //                $cache_dir_real = realpath($cache_dir);
        // get language from variable (path) or set default from config
        $language = new UserLanguage($data);

        $cv = new getCvData();
        $render = new docTreeRender($language, $cv->value());
        echo $render->value();

//        echo $docTreeCv->render();
        // Footer
        include($template_path . 'index_footer.php');
    }
}

