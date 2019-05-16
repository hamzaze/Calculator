<?php

namespace Calculator\StringCalc\Symbols\Concrete\Constants;

use Calculator\StringCalc\Symbols\AbstractConstant;

/**
 * PHP M_SQRTPI constant
 * Value: 1.77...
 * @see http://php.net/manual/en/math.constants.php
 */
class SqrtPiConstant extends AbstractConstant
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['sqrtPi'];

    /**
     * @inheritdoc
     */
    protected $value = M_SQRTPI;

}