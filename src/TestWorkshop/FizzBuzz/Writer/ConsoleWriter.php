<?php

namespace TestWorkshop\FizzBuzz\Writer;

class ConsoleWriter implements WriterInterface
{

    /**
     * @param string $output
     *
     * @return void
     */
    public function write($output)
    {
        echo $output . PHP_EOL;
    }

}
