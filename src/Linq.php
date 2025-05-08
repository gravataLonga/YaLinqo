<?php

/**
 * Global functions and initialization.
 * @author Alexander Prokhorov
 * @license Simplified BSD
 * @link https://github.com/Athari/YaLinqo src on GitHub
 */

use Gravatalonga\YaLinqo\Enumerable;
use Gravatalonga\YaLinqo\Functions;
use Gravatalonga\YaLinqo\Utils;

Functions::init();
Utils::init();

if (!function_exists('from')) {

    function from($source): Enumerable
    {
        return Enumerable::from($source);
    }
}