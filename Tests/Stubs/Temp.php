<?php

namespace YaLinqo\Tests\Stubs;

// @codeCoverageIgnoreStart

class Temp
{
    public function __construct(public $v)
    {
    }

    public function foo($a)
    {
        return $this->v + $a;
    }

    public static function bar($a)
    {
        return $a;
    }
}
