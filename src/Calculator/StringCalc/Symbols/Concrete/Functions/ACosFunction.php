<?php

namespace Calculator\StringCalc\Symbols\Concrete\Functions;

use Calculator\StringCalc\Exceptions\NumberOfArgumentsException;
use Calculator\StringCalc\Symbols\AbstractFunction;

/**
 * PHP acos() function aka arc cosine. Expects one parameter.
 * @see http://php.net/manual/en/ref.math.php
 */
class ACosFunction extends AbstractFunction
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['acos'];

    /**
     * @inheritdoc
     */
    public function execute(array $arguments)
    {
        if (sizeof($arguments) != 1) {
            throw new NumberOfArgumentsException('Error: Expected one argument, got '.sizeof($arguments));
        }

        $number = $arguments[0];

        return acos($number);
    }

}