<?php

/**
 * Class FunctionMock
 */
class FunctionMock
{
    private $fn;
    public $calls;

    public function __construct(Closure $fn = null)
    {
        $this->calls = [];
        $this->fn = $fn;
    }

    public function __invoke(...$args)
    {
        $this->calls[] = $args;
        return $this->fn !== null ? call_user_func($this->fn, ...$args) : null;
    }
}