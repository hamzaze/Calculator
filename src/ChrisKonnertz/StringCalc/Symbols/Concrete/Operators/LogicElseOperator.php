<?php

namespace ChrisKonnertz\StringCalc\Symbols\Concrete\Operators;

use ChrisKonnertz\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for logical OR.
 * Example: if(a) b; If a condition a is true, then return b, ie. if.. then
 * @see https://en.wikipedia.org/wiki/Conditional_(computer_programming)
 *
 * @package ChrisKonnertz\StringCalc\Symbols\Concrete\Operators
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
        echo $leftNumber . ' : ' . $rightNumber;
        echo '<br />';
        echo $result;
        echo '<br />-------<br />';
        return $result;
    }

}