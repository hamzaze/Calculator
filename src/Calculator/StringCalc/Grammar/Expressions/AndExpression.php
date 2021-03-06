<?php

namespace Calculator\StringCalc\Grammar\Expressions;

/**
 * This is a container expression. The expressions that it contains are
 * linked with an AND.
 *
 * @package Calculator\StringCalc\Grammar\Expressions
 */
class AndExpression extends AbstractContainerExpression
{

    public function __toString()
    {
        $parts = [];

        foreach ($this->expressions as $expression) {
            $parts[] = $expression->__toString();
        }

        return implode(' ', $parts);
    }

}