<?php

namespace TestWorkshop\FizzBuzz;

use TestWorkshop\FizzBuzz\Rule\RuleInterface;
use TestWorkshop\FizzBuzz\Writer\WriterInterface;

class FizzBuzzEngine implements EngineInterface
{

    /**
     * @var \TestWorkshop\FizzBuzz\Rule\RuleInterface[]
     */
    private $rules = [];

    /**
     * @var \TestWorkshop\FizzBuzz\Writer\WriterInterface
     */
    private $writer;

    /**
     * @param \TestWorkshop\FizzBuzz\Writer\WriterInterface $writer
     */
    public function __construct(WriterInterface $writer)
    {
        $this->writer = $writer;
    }

    /**
     * @param \TestWorkshop\FizzBuzz\Rule\RuleInterface $rule
     *
     * @return void
     */
    public function addRule(RuleInterface $rule)
    {
        $this->rules[] = $rule;
    }


    /**
     * Runs a FizzBuzz scenario until the given limit is reached
     *
     * @param int $limit
     *
     * @return void
     */
    public function run($limit = 100)
    {
        for ($i = 1; $i <= $limit; $i++) {
            $output = '';

            foreach ($this->rules as $rule) {
                if ($rule->isApplicable($i)) {
                    $output .= $rule->getOutput();
                }
            }


            if (empty($output)) {
                $output = 'None';
            }

            $this->writer->write(sprintf('%d: %s', $i, $output));
        }
    }

}
