<?php

namespace Calculator\StringCalc\Calculator;

use Calculator\StringCalc\Parser\Nodes\AbstractNode;

/**
 * The calculator has one important method: calculate()
 * It takes a container node as input and returns the
 * numeric result of the calculation.
 *
 * @package Calculator\StringCalc\Calculator
 */
interface CalculatorInterface
{

    /**
     * Calculates the numeric result of nodes in the syntax tree.
     * It takes a parser node as input and returns the numeric
     * result of the calculation.
     *
     * @param AbstractNode $rootNode
     * @return float|int
     * @throws \Exception
     */
    public function calculate(AbstractNode $rootNode);

}
