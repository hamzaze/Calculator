<?php

namespace ChrisKonnertz\StringCalc\Symbols\Concrete\Operators;

use ChrisKonnertz\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for logical equal.
 * Example: a == b; mean that a is equal to b
 * @see https://en.wikipedia.org/wiki/Equals_Sign
 *
 * @package ChrisKonnertz\StringCalc\Symbols\Concrete\Operators
 */
class LogicGreaterThanOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['>'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 500;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    { 
        $result=$leftNumber > $rightNumber ? 1 : 0;
        echo $leftNumber . ' > ' . $rightNumber;
        echo '<br />';
        echo $result;
        echo '<br />-------<br />';
        
        return $result;
    }

}