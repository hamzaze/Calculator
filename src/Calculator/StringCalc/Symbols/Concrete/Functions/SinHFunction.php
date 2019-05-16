<?php

namespace Calculator\StringCalc\Symbols\Concrete\Functions;

use Calculator\StringCalc\Exceptions\NumberOfArgumentsException;
use Calculator\StringCalc\Symbols\AbstractFunction;

/**
 * PHP sinh() function aka hyperbolic sine.
 * Expects one parameter.
 * @see http://php.net/manual/en/ref.math.php
 */
class SinHFunction extends AbstractFunction
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['sinH'];

    /**
     * @inheritdoc
     */
    public function execute(array $arguments)
    {
        if (sizeof($arguments) != 1) {
            throw new NumberOfArgumentsException('Error: Expected one argument, got '.sizeof($arguments));
        }

        $number = $arguments[0];

        return sinh($number);
    }

}