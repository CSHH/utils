<?php

namespace HeavenProject\Utils;

use Nette;
use Nette\Utils\Random;

/**
 * Generates unique values while using blacklist of values to avoid.
 */
class UniqueGenerator extends Nette\Object
{
    use StaticClass;

    /**
     * @param  string $blacklist
     * @param  int    $lenght
     * @param  string $charlist
     * @return string
     */
    public static function generate($blacklist = array(), $lenght = 10, $charlist = '0-9a-z')
    {
        while (true) {
            $s = Random::generate($lenght, $charlist);
            if (!in_array($s, $blacklist)) {
                return $s;
            }
        }
    }
}
