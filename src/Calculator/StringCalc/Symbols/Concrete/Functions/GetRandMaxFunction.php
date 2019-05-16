<?php

namespace Calculator\StringCalc\Symbols\Concrete\Functions;

use Calculator\StringCalc\Exceptions\NumberOfArgumentsException;
use Calculator\StringCalc\Symbols\AbstractFunction;

/**
 * PHP getrandmax() function aka return largest
 * possible random value. Expects one parameter.
 * @see http://php.net/manual/en/ref.math.php
 */
class GetRandMaxFunction extends AbstractFunction
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['getRandMax'];

    /**
     * @inheritdoc
     */
    public function execute(array $arguments)
    {
        if (sizeof($arguments) > 0) {
            throw new NumberOfArgumentsException('Error: Expected no arguments, got '.sizeof($arguments));
        }

        return getrandmax();
    }

}