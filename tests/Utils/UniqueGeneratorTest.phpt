<?php

namespace HeavenProject\Tests\Utils;

use Tester;
use Tester\Assert;
use HeavenProject\Utils\UniqueGenerator;

require __DIR__ . '/../bootstrap.php';

class UniqueGeneratorTest extends Tester\TestCase
{
    public function testGenerateWithEmptyBlacklist()
    {
        $this->runTestLoop();
    }

    public function testGenerateWithPrepatedBlacklist()
    {
        $blacklist = array(
            '0123456789',
            'abcdefghij',
            '5249751258',
            'ahrldjfowp',
            's5r96glpa2',
            '5a8d215s45',
        );

        $this->runTestLoop($blacklist);
    }

    private function runTestLoop(array $blacklist = array())
    {
        for ($i = 0; $i < 100; $i++) {
            $val = UniqueGenerator::generate($blacklist);
            Assert::true(!in_array($val, $blacklist));
            $blacklist[] = $val;
        }
    }
}

$testCase = new UniqueGeneratorTest;
$testCase->run();
