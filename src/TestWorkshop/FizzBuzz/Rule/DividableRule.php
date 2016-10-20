<?php

namespace TestWorkshop\FizzBuzz\Rule;

class DividableRule implements RuleInterface
{

    /**
     * @var int
     */
    private $divisor = 1;

    /**
     * @var string
     */
    private $output = '';


    /**
     * @param int $divisor
     * @param string $output
     */
    public function __construct($divisor, $output)
    {
        $this->divisor = $divisor;
        $this->output = $output;
    }


    /**
     * @param int $number
     *
     * @return bool
     */
    public function isApplicable($number)
    {
        return ($number % $this->divisor === 0);
    }


    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

}
