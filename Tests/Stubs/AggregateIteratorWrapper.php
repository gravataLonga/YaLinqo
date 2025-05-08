<?php

namespace YaLinqo\Tests\Stubs;

// @codeCoverageIgnoreStart

class AggregateIteratorWrapper implements \IteratorAggregate
{
    /**
     * @param \Iterator $iterator
     */
    public function __construct(private $iterator)
    {
    }

    public function getIterator()
    {
        return $this->iterator;
    }
}
