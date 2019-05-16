<?php

namespace Calculator\StringCalc\Symbols\Concrete\Functions;

use Calculator\StringCalc\Exceptions\NumberOfArgumentsException;
use Calculator\StringCalc\Symbols\AbstractFunction;

/**
 * PHP deg2rad() function aka converts a number in degrees
 * to the radian equivalent. Expects one parameter.
 * @see http://php.net/manual/en/ref.math.php
 */
class DegToRadFunction extends AbstractFunction
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['degToRad'];

    /**
     * @inheritdoc
     */
    public function execute(array $arguments)
    {
        if (sizeof($arguments) != 1) {
            throw new NumberOfArgumentsException('Error: Expected one argument, got '.sizeof($arguments));
        }

        $number = $arguments[0];

        return deg2rad($number);
    }

}