<?php

namespace UnitTest\TestWorkshop\FizzBuzz;

use PHPUnit\Framework\TestCase;
use UnitTest\TestWorkshop\FizzBuzz\Writer\TestWriter;
use TestWorkshop\FizzBuzz\FizzBuzzEngine;
use TestWorkshop\FizzBuzz\Rule\RuleInterface;

class FizzBuzzEngineTest extends TestCase
{

    /**
     * @return void
     */
    public function testWithApplicableRule()
    {
        $ruleStub = $this->getMockBuilder(RuleInterface::class);
        $ruleStub = $ruleStub->getMock();
        /** @var \TestWorkshop\FizzBuzz\Rule\RuleInterface|\PHPUnit_Framework_MockObject_MockObject $ruleStub */
        $ruleStub->method('getOutput')->willReturn('Test');
        $ruleStub->method('isApplicable')->willReturn(true);

        $testWriter = new TestWriter();
        $fizzBuzzEngine = new FizzBuzzEngine($testWriter);
        $fizzBuzzEngine->addRule($ruleStub);
        $fizzBuzzEngine->run(1);

        $this->assertEquals('1: Test' . PHP_EOL, $testWriter->getOutput());
    }

}
