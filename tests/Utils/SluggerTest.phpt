<?php

namespace HeavenProject\Tests\Utils;

use Tester;
use Tester\Assert;
use HeavenProject\Utils\Slugger;

require __DIR__ . '/../bootstrap.php';

class SluggerTest extends Tester\TestCase
{
    /**
     * @dataProvider getArgs
     *
     * @param string $expected
     * @param string $actual
     */
    public function testSlugify($expected, $actual)
    {
        Assert::same($expected, Slugger::slugify($actual));
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return array(
            ['heavenproject', 'HeavenProject'],
            ['heaven-project', 'Heaven __/ _PROJECT#?_!   __'],
        );
    }
}

$testCase = new SluggerTest;
$testCase->run();
