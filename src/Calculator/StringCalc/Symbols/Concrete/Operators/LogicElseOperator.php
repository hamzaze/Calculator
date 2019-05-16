<?php

namespace Calculator\StringCalc\Symbols\Concrete\Operators;

use Calculator\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for logical OR.
 * Example: if(a) b; If a condition a is true, then return b, ie. if.. then
 * @see https://en.wikipedia.org/wiki/Conditional_(computer_programming)
 *
 * @package Calculator\StringCalc\Symbols\Concrete\Operators
 */
class LogicElseOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = [':'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 100;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        $result=$leftNumber == 0 ? $rightNumber : $leftNumber;
        if(TESTMODE==1){
            $debugString='';
            $debugString .=$leftNumber . ' : ' . $rightNumber;
            $debugString .='<br />';
            $debugString .=$result;
            $debugString .='<br />-------<br />';
            echo $debugString;
        }
        return $result;
    }

}