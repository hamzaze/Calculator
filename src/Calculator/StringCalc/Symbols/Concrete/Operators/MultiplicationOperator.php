<?php

namespace Calculator\StringCalc\Symbols\Concrete\Operators;

use Calculator\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for mathematical multiplication.
 * Example: "2*3" => 6
 * @see https://en.wikipedia.org/wiki/Multiplication
 *
 * @package Calculator\StringCalc\Symbols\Concrete\Operators
 */
class MultiplicationOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['*'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 200;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        $result = $leftNumber * $rightNumber;
        if(TESTMODE==1){
            $debugString='';
            $debugString .=$leftNumber . ' * ' . $rightNumber;
            $debugString .='<br />';
            $debugString .=$result;
            $debugString .='<br />-------<br />';
            echo $debugString;
        }
        
        return $result; 
    }

}