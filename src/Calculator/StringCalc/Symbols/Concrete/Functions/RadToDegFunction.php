<?php

namespace Calculator\StringCalc\Symbols\Concrete\Functions;

use Calculator\StringCalc\Exceptions\NumberOfArgumentsException;
use Calculator\StringCalc\Symbols\AbstractFunction;

/**
 * PHP rad2deg() function aka converts a radian number to
 * the equivalent number in degrees. Expects one parameter.
 * @see http://php.net/manual/en/ref.math.php
 */
class RadToDegFunction extends AbstractFunction
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['radToDeg'];

    /**
     * @inheritdoc
     */
    public function execute(array $arguments)
    {
        if (sizeof($arguments) != 1) {
            throw new NumberOfArgumentsException('Error: Expected one argument, got '.sizeof($arguments));
        }

        $number = $arguments[0];

        return rad2deg($number);
    }

}