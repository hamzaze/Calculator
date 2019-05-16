<?php

namespace Calculator\StringCalc\Symbols\Concrete\Constants;

use Calculator\StringCalc\Symbols\AbstractConstant;

/**
 * PHP M_SQRT2 constant
 * Value: 1.41...
 * @see http://php.net/manual/en/math.constants.php
 */
class SqrtTwoConstant extends AbstractConstant
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['sqrtTwo'];

    /**
     * @inheritdoc
     */
    protected $value = M_SQRT2;

}