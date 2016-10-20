<?php

namespace IntegrationTest\TestWorkshop\FizzBuzz;

use PHPUnit\Framework\TestCase;
use TestWorkshop\FizzBuzz\FizzBuzzEngine;
use TestWorkshop\FizzBuzz\Rule\DividableRule;
use UnitTest\TestWorkshop\FizzBuzz\Writer\TestWriter;

class FizzBuzzEngineTest extends TestCase
{

    /**
     * @return void
     */
    public function testWithApplicableRule()
    {
        $testWriter = new TestWriter();
        $fizzBuzzEngine = new FizzBuzzEngine($testWriter);
        $fizzBuzzEngine->addRule(new DividableRule(3, 'Fizz'));
        $fizzBuzzEngine->addRule(new DividableRule(5, 'Buzz'));
        $fizzBuzzEngine->addRule(new DividableRule(7, 'Bar'));
        $fizzBuzzEngine->run(21);

        $expectedResult = <<<TEST
1: None
2: None
3: Fizz
4: None
5: Buzz
6: Fizz
7: Bar
8: None
9: Fizz
10: Buzz
11: None
12: Fizz
13: None
14: Bar
15: FizzBuzz
16: None
17: None
18: Fizz
19: None
20: Buzz
21: FizzBar

TEST;

        $this->assertEquals($expectedResult, $testWriter->getOutput());
    }

}
