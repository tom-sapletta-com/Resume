<?php

namespace App;

/**
 * Project: Phunc,
 * File created by: tom-sapletta-com, on 20.10.2016, 13:03
 */
class CacheDir
{
    function __toString()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR;
    }
}