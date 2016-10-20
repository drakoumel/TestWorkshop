<?php

namespace UnitTest\TestWorkshop\FizzBuzz\Rule;

use TestWorkshop\FizzBuzz\Rule\DividableRule;

class DividableRuleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return void
     */
    public function testIsApplicable()
    {
        $rule = new DividableRule(2, 'test');
        $this->assertTrue($rule->isApplicable(2));
    }

    /**
     * @return void
     */
    public function testIsNotApplicable()
    {
        $rule = new DividableRule(2, 'test');
        $this->assertFalse($rule->isApplicable(1));
    }

}
