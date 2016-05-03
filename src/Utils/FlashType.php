<?php

namespace HeavenProject\Utils;

use Nette;

/**
 * Useful constants for some flash message types.
 */
class FlashType extends Nette\Object
{
    use StaticClass;

    /** @var string */
    const DANGER = 'danger';
    /** @var string */
    const ERROR = 'error';
    /** @var string */
    const INFO = 'info';
    /** @var string */
    const SUCCESS = 'success';
    /** @var string */
    const WARNING = 'warning';
}
