<?php

namespace Calculator\StringCalc\Symbols\Concrete\Constants;

use Calculator\StringCalc\Symbols\AbstractConstant;

/**
 * PHP M_E constant
 * Value: 2.71...
 * @see http://php.net/manual/en/math.constants.php
 */
class EConstant extends AbstractConstant
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['e'];

    /**
     * @inheritdoc
     */
    protected $value = M_E;

}