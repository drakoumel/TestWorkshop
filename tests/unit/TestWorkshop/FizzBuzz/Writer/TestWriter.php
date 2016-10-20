<?php

namespace UnitTest\TestWorkshop\FizzBuzz\Writer;

use TestWorkshop\FizzBuzz\Writer\WriterInterface;

class TestWriter implements WriterInterface
{

    /**
     * @var string
     */
    private $cachedOutput = '';

    /**
     * @param string $output
     *
     * @return void
     */
    public function write($output)
    {
        $this->cachedOutput .= $output . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->cachedOutput;
    }

}
