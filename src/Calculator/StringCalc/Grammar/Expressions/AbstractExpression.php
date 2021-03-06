<?php

namespace Calculator\StringCalc\Grammar\Expressions;

/**
 * Abstract base class for all expression classes
 *
 * @package Calculator\StringCalc\Grammar\Expressions
 */
abstract class AbstractExpression
{

    /**
     * The grammar has to be printable so child classes have
     * to overwrite this method with their own implementation
     */
    abstract public function __toString();

}
