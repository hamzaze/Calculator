<?php

namespace Calculator\StringCalc\Container\ServiceProviders;

use Calculator\StringCalc\Container\AbstractSingletonServiceProvider;
use Calculator\StringCalc\Symbols\SymbolContainer;

/**
 * This is a service provider class for the symbol container class.
 *
 * @package Calculator\StringCalc\Container\ServiceProviders
 */
class SymbolContainerServiceProvider extends AbstractSingletonServiceProvider
{
    
    /**
     * @inheritdoc
     */
    protected function createService()
    {
        $stringHelper = $this->getService('stringcalc_stringhelper');

        return new SymbolContainer($stringHelper);
    }

}
