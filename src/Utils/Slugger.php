<?php

namespace HeavenProject\Utils;

use Nette;
use Nette\Utils\Strings;

/**
 * Slug generating utility.
 */
class Slugger extends Nette\Object
{
    use StaticClass;

    /**
     * @param  string $subject
     * @return string
     */
    public static function slugify($subject)
    {
        return Strings::webalize($subject);
    }
}
