<?php

namespace YaLinqo\Tests\Unit;

use YaLinqo\Tests\Testing\TestCaseEnumerable;

class LinqTest extends TestCaseEnumerable
{
    function testFunctions()
    {
        $this->assertInstanceOf(\YaLinqo\Enumerable::class, from(new \EmptyIterator));
    }
}
