<?php

namespace Resume;

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 13:03
 */
class InfoPath
{
    function __toString()
    {
        return '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'info.log.txt';
    }
}