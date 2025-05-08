<?php

namespace YaLinqo\Tests\Unit;

use Gravatalonga\YaLinqo\Enumerable;
use YaLinqo\Tests\Testing\TestCaseEnumerable;

class LinqTest extends TestCaseEnumerable
{
    function testFunctions()
    {
        $this->assertInstanceOf(Enumerable::class, from(new \EmptyIterator));
    }
}
