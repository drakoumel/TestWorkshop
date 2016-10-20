<?php

namespace TestWorkshop\FizzBuzz;

use TestWorkshop\FizzBuzz\Rule\RuleInterface;

interface EngineInterface
{

    /**
     * @param \TestWorkshop\FizzBuzz\Rule\RuleInterface $rule
     *
     * @return void
     */
    public function addRule(RuleInterface $rule);

    /**
     * @param int $limit
     *
     * @return void
     */
    public function run($limit = 100);

}
