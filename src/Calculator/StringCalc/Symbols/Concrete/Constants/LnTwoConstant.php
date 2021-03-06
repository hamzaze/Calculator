<?php

namespace Calculator\StringCalc\Symbols\Concrete\Constants;

use Calculator\StringCalc\Symbols\AbstractConstant;

/**
 * PHP M_LN2 constant
 * Value: 0.69...
 * @see http://php.net/manual/en/math.constants.php
 */
class LnTwoConstant extends AbstractConstant
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['lnTwo'];

    /**
     * @inheritdoc
     */
    protected $value = M_LN2;

}