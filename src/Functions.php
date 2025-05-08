<?php

/**
 * Functions class.
 * @author Alexander Prokhorov
 * @license Simplified BSD
 * @link https://github.com/Athari/YaLinqo src on GitHub
 */

namespace Gravatalonga\YaLinqo;

/**
 * Container for standard functions in the form of closures.
 * @package src
 */
class Functions
{
    /**
     * Identity function: returns the only argument.
     * @var callable {(x) ==> x}
     */
    public static $identity;
    /**
     * Key function: returns the second argument of two.
     * @var callable {(v, k) ==> k}
     */
    public static $key;
    /**
     * Value function: returns the first argument of two.
     * @var callable {(v, k) ==> v}
     */
    public static $value;
    /**
     * True function: returns true.
     * @var callable {() ==> true}
     */
    public static $true;
    /**
     * False function: returns false.
     * @var callable {() ==> false}
     */
    public static $false;
    /**
     * Blank function: does nothing.
     * @var callable {() ==> {}}
     */
    public static $blank;
    /**
     * Compare strict function: returns -1, 0 or 1 based on === and > operators.
     * @var callable
     */
    public static $compareStrict;
    /**
     * Compare strict function reversed: returns 1, 0 or -1 based on === and > operators.
     * @var callable
     */
    public static $compareStrictReversed;
    /**
     * Compare loose function: returns -1, 0 or 1 based on == and > operators.
     * @var callable
     */
    public static $compareLoose;
    /**
     * Compare loose function reversed: returns 1, 0 or -1 based on == and > operators.
     * @var callable
     */
    public static $compareLooseReversed;
    /**
     * Compare int function: returns the difference between the first and the second argument.
     * @var callable
     */
    public static $compareInt;
    /**
     * Compare int function reversed: returns the difference between the second and the first argument.
     * @var callable
     */
    public static $compareIntReversed;

    /** @internal */
    public static function init()
    {
        self::$identity = (fn($x) => $x);

        /** @noinspection PhpUnusedParameterInspection */
        self::$key = (fn($v, $k) => $k);

        /** @noinspection PhpUnusedParameterInspection */
        self::$value = (fn($v, $k) => $v);

        self::$true = (fn() => true);

        self::$false = (fn() => false);

        self::$blank = function(): void { };

        self::$compareStrict = function($a, $b) {
            if ($a === $b)
                return 0;
            elseif ($a > $b)
                return 1;
            else
                return -1;
        };

        self::$compareStrictReversed = function($a, $b) {
            if ($a === $b)
                return 0;
            elseif ($a > $b)
                return -1;
            else
                return 1;
        };

        self::$compareLoose = function($a, $b) {
            if ($a == $b)
                return 0;
            elseif ($a > $b)
                return 1;
            else
                return -1;
        };

        self::$compareLooseReversed = function($a, $b) {
            if ($a == $b)
                return 0;
            elseif ($a > $b)
                return -1;
            else
                return 1;
        };

        self::$compareInt = (fn($a, $b) => $a - $b);

        self::$compareIntReversed = (fn($a, $b) => $b - $a);
    }

    /**
     * Increment function: returns incremental integers starting from 0.
     * @return callable
     */
    public static function increment()
    {
        $i = 0;
        return function() use (&$i) { return $i++; };
    }
}
