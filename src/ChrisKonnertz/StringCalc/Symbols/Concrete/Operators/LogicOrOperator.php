<?php

namespace ChrisKonnertz\StringCalc\Symbols\Concrete\Operators;

use ChrisKonnertz\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for logical OR.
 * Example: a || b; mean that a is true or b is true; Returns true if either a or b is true
 * @see https://en.wikipedia.org/wiki/Logical_disjunction
 *
 * @package ChrisKonnertz\StringCalc\Symbols\Concrete\Operators
 */
class LogicOrOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['||'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 400;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber){
        $result=$leftNumber || $rightNumber ? 1: 0;
        if(TESTMODE==1){
            $debugString='';
            $debugString .=$leftNumber . ' || ' . $rightNumber;
            $debugString .='<br />';
            $debugString .=$result;
            $debugString .='<br />-------<br />';
            echo $debugString;
        }
        
        return $result;
    }

}