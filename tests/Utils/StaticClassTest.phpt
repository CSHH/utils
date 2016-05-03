<?php

namespace HeavenProject\Tests\Utils;

use Tester;
use Tester\Assert;
use HeavenProject\Tests\StaticClassUser;

require __DIR__ . '/../bootstrap.php';

class StaticClassTest extends Tester\TestCase
{
    public function testThrowsException()
    {
        Assert::exception(function () {
            new StaticClassUser;
        }, 'Nette\StaticClassException');
    }
}

$testCase = new StaticClassTest;
$testCase->run();
