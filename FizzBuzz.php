<?php

use TestWorkshop\FizzBuzz\FizzBuzzEngine;
use TestWorkshop\FizzBuzz\Rule\DividableRule;
use TestWorkshop\FizzBuzz\Writer\ConsoleWriter;

require __DIR__ . '/vendor/autoload.php';

$consoleWriter = new ConsoleWriter();
$fizzBuzzEngine = new FizzBuzzEngine($consoleWriter);
$fizzBuzzEngine->addRule(new DividableRule(3, 'Fizz'));
$fizzBuzzEngine->addRule(new DividableRule(5, 'Buzz'));
$fizzBuzzEngine->addRule(new DividableRule(7, 'Bar'));
$fizzBuzzEngine->run(100);
