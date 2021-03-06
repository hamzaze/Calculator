<?php

namespace Calculator\StringCalc\Symbols\Concrete\Constants;

use Calculator\StringCalc\Symbols\AbstractConstant;

/**
 * PHP M_LOG2E constant
 * Value: 1.44...
 * @see http://php.net/manual/en/math.constants.php
 */
class LogTwoEConstant extends AbstractConstant
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['logTwoE'];

    /**
     * @inheritdoc
     */
    protected $value = M_LOG2E;

}