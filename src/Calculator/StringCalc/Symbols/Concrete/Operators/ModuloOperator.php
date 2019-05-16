<?php

namespace Calculator\StringCalc\Symbols\Concrete\Operators;

use Calculator\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for mathematical modulo operation.
 * Example: "5%3" => 2
 * @see https://en.wikipedia.org/wiki/Modulo_operation
 *
 * @package Calculator\StringCalc\Symbols\Concrete\Operators
 */
class ModuloOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['%'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 200;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        $result = $leftNumber % $rightNumber;
        if(TESTMODE==1){
            $debugString='';
            $debugString .=$leftNumber . ' % ' . $rightNumber;
            $debugString .='<br />';
            $debugString .=$result;
            $debugString .='<br />-------<br />';
            echo $debugString;
        }
        
        return $result; 
    }

}