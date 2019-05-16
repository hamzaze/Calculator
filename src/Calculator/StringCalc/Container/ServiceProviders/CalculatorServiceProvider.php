<?php

namespace Calculator\StringCalc\Container\ServiceProviders;

use Calculator\StringCalc\Calculator\Calculator;
use Calculator\StringCalc\Container\AbstractSingletonServiceProvider;

/**
 * This is a service provider class for the calculator class.
 *
 * @package Calculator\StringCalc\Container\ServiceProviders
 */
class CalculatorServiceProvider extends AbstractSingletonServiceProvider
{
    /**
     * @inheritdoc
     */
    protected function createService()
    {
        return new Calculator();
    }

}