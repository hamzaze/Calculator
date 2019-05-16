<?php

namespace Calculator\StringCalc\Symbols\Concrete\Functions;

use Calculator\StringCalc\Exceptions\NumberOfArgumentsException;
use Calculator\StringCalc\Symbols\AbstractFunction;

/**
 * PHP sqrt() function aka square root.
 * Expects one parameter.
 * @see http://php.net/manual/en/ref.math.php
 */
class SqrtFunction extends AbstractFunction
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['sqrt'];

    /**
     * @inheritdoc
     */
    public function execute(array $arguments)
    {
        if (sizeof($arguments) != 1) {
            throw new NumberOfArgumentsException('Error: Expected one argument, got '.sizeof($arguments));
        }

        $number = $arguments[0];

        return sqrt($number);
    }

}