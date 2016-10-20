<?php

namespace App;

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 13:01
 */
class ErrorPath
{
    function __toString()
    {
        return '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'error.log.txt';
    }
}