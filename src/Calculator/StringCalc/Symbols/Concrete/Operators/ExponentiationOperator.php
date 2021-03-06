<?php

namespace Calculator\StringCalc\Symbols\Concrete\Operators;

use Calculator\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for mathematical exponentiation.
 * Example: "3^2" => 9, "-3^2" => -9, "3^-2" equals "3^(-2)"
 * @see https://en.wikipedia.org/wiki/Exponentiation
 *
 * @package Calculator\StringCalc\Symbols\Concrete\Operators
 */
class ExponentiationOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['^'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 300;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        $result=pow($leftNumber, $rightNumber);
        if(TESTMODE==1){
            $debugString='';
            $debugString .='pow(' . $leftNumber . ',' . $rightNumber . ')';
            $debugString .='<br />';
            $debugString .=$result;
            $debugString .='<br />-------<br />';
            echo $debugString;
        }
        return $result;
    }

}