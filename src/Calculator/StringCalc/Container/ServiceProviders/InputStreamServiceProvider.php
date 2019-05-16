<?php

namespace Calculator\StringCalc\Container\ServiceProviders;

use Calculator\StringCalc\Container\AbstractSingletonServiceProvider;
use Calculator\StringCalc\Tokenizer\InputStream;

/**
 * This is a service provider class for the input stream class.
 *
 * @package Calculator\StringCalc\Container\ServiceProviders
 */
class InputStreamServiceProvider extends AbstractSingletonServiceProvider
{

    /**
     * @inheritdoc
     */
    protected function createService()
    {
        $stringHelper = $this->getService('stringcalc_stringhelper');

        return new InputStream($stringHelper);
    }

}