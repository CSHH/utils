<?php

namespace HeavenProject\Utils;

use Nette\StaticClassException;

/**
 * Converts given class to static one and forbids its instantiation.
 */
trait StaticClass
{
    /**
     * @throws StaticClassException
     */
    final public function __construct()
    {
        throw new StaticClassException();
    }
}
