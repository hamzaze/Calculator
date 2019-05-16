<?php

namespace Calculator\StringCalc\Container;

use Calculator\StringCalc\Container\ServiceProviders\CalculatorServiceProvider;
use Calculator\StringCalc\Container\ServiceProviders\InputStreamServiceProvider;
use Calculator\StringCalc\Container\ServiceProviders\StringHelperServiceProvider;
use Calculator\StringCalc\Container\ServiceProviders\SymbolContainerServiceProvider;

/**
 * This class is where all service providers are registered
 * (except of those that are registered at runtime).
 *
 * @package Calculator\StringCalc\Container
 */
class ServiceProviderRegistry implements ServiceProviderRegistryInterface
{

    /**
     * @inheritdoc
     */
    public function getServiceProviders()
    {
        $serviceProviders = [
            'stringcalc_stringhelper'       => StringHelperServiceProvider::class,
            'stringcalc_inputstream'        => InputStreamServiceProvider::class,
            'stringcalc_symbolcontainer'    => SymbolContainerServiceProvider::class,
            'stringcalc_calculator'         => CalculatorServiceProvider::class,
        ];

        return $serviceProviders;
    }

}