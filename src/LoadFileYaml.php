<?php
/**
 * Project: Resume,
 * File created by: tom-sapletta-com, on 15.11.2016, 14:42
 */

namespace Resume;
use Phunc\Items;
use Exception;

class LoadFileYaml implements Items
{

    protected $items;

    /**
     * LoadFileYaml constructor.
     *
     * @param $path
     * @throws Exception
     */
    public function __construct($path)
    {
        // get file from path on local filesystem


        if (empty($path)) {
            throw new Exception(__CLASS__ . ' Empty Path');
        }

        if (!is_readable($path)) {
            throw new Exception(__CLASS__ . ' Is Not readable File');
        }

        $this->items = \Spyc::YAMLLoad($path);

        if (empty($this->items)) {
            throw new Exception(__CLASS__ . ' Empty File Data');
        }
    }

    /**
     * @return array
     */
    public function items()
    {
        return $this->items;
    }
}