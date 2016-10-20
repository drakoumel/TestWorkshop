<?php

namespace TestWorkshop\FizzBuzz\Rule;

interface RuleInterface
{

    /**
     * @param int $number
     *
     * @return bool
     */
    public function isApplicable($number);

    /**
     * @return string
     */
    public function getOutput();

}
