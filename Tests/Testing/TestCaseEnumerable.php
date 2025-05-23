<?php

namespace YaLinqo\Tests\Testing;

use PHPUnit\Framework\TestCase;
use Gravatalonga\YaLinqo\Enumerable as E, Gravatalonga\YaLinqo\Functions;

class TestCaseEnumerable extends TestCase
{
    protected function setUp(): void
    {
        // $this->setOutputCallback(function($str) { return str_replace("\r\n", "\n", $str); });
    }

    public function setExpectedException($exception, $message = null)
    {
        $this->expectException($exception);
        if ($message !== null)
            $this->expectExceptionMessage($message);
    }

    public static function assertEnumEquals(array $expected, E $actual, $maxLength = PHP_INT_MAX)
    {
        self::assertEquals($expected, $actual->take($maxLength)->toArrayDeep());
    }

    public static function assertEnumOrderEquals(array $expected, E $actual, $maxLength = PHP_INT_MAX)
    {
        self::assertEquals($expected, $actual->take($maxLength)->select('[ $k, $v ]', Functions::increment())->toArrayDeep());
    }

    public static function assertEnumValuesEquals(array $expected, E $actual, $maxLength = PHP_INT_MAX)
    {
        self::assertEquals($expected, $actual->take($maxLength)->toValues()->toArrayDeep());
    }
}
