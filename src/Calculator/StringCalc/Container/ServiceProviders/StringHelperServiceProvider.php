<?php

namespace Calculator\StringCalc\Container\ServiceProviders;

use Calculator\StringCalc\Container\AbstractSingletonServiceProvider;
use Calculator\StringCalc\Support\StringHelper;

/**
 * This is a service provider class for the string helper class.
 *
 * @package Calculator\StringCalc\Container\ServiceProviders
 */
class StringHelperServiceProvider extends AbstractSingletonServiceProvider
{
    /**
     * @inheritdoc
     */
    protected function createService()
    {
        return new StringHelper();
    }

}