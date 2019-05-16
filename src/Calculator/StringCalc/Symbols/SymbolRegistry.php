<?php

namespace Calculator\StringCalc\Symbols;

use Calculator\StringCalc\Symbols\Concrete\Brackets\ClosingBracket;
use Calculator\StringCalc\Symbols\Concrete\Brackets\OpeningBracket;
use Calculator\StringCalc\Symbols\Concrete\Constants\EConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\EulerConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\LnPiConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\LnTenConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\LnTwoConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\LogTenEConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\LogTwoEConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\OnePiConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\PiConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\PiFourConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\PiTwoConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\SqrtOneTwoConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\SqrtPiConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\SqrtThreeConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\SqrtTwoConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\TwoPiConstant;
use Calculator\StringCalc\Symbols\Concrete\Constants\TwoSqrtPiConstant;
use Calculator\StringCalc\Symbols\Concrete\Functions\AbsFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ACosFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ACosHFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ASinFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ASinHFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ATanFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ATanHFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ATanTwoFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\CeilFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\CosFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\CosHFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\DegToRadFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\EnFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ExpFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\ExpMOneFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\FloorFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\FModFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\GetRandMaxFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\HypotFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\LogFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\LogOnePFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\LogTenFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\MaxFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\MinFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\MTGetRandMaxFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\MTRandFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\PowFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\RadToDegFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\RandFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\RoundFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\SinFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\SinHFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\SqrtFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\TanFunction;
use Calculator\StringCalc\Symbols\Concrete\Functions\TanHFunction;
use Calculator\StringCalc\Symbols\Concrete\Number;
use Calculator\StringCalc\Symbols\Concrete\Operators\AdditionOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\DivisionOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\ExponentiationOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\ModuloOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\MultiplicationOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\SubtractionOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicEqualOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicNotEqualOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicGreaterThanOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicGreaterOrEqualOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicLessThanOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicLessOrEqualOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicOrOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicAndOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicThenOperator;
use Calculator\StringCalc\Symbols\Concrete\Operators\LogicElseOperator;
use Calculator\StringCalc\Symbols\Concrete\Separator;

/**
 * This class has one simple job: It contains an array with the names
 * of the initially registered symbols. It does not offer an add()
 * method - but you can add new symbols via the addSymbol() method of
 * the StringCalc class.
 *
 * @package Calculator\StringCalc\Symbols
 */
class SymbolRegistry
{

    /**
     * This method has to return an array with the class names of all registered
     * symbols. Symbols have to inherit from the AbstractSymbol class.
     *
     * @return string[]
     */
    public function getSymbols()
    {
        $symbols = [
            Number::class,

            Separator::class,

            ClosingBracket::class,
            OpeningBracket::class,

            PiConstant::class,
            EConstant::class,
            LogTwoEConstant::class,
            LogTenEConstant::class,
            LnTwoConstant::class,
            LnTenConstant::class,
            PiTwoConstant::class,
            PiFourConstant::class,
            OnePiConstant::class,
            TwoPiConstant::class,
            SqrtPiConstant::class,
            TwoSqrtPiConstant::class,
            SqrtTwoConstant::class,
            SqrtThreeConstant::class,
            SqrtOneTwoConstant::class,
            LnPiConstant::class,
            EulerConstant::class,

            AdditionOperator::class,
            DivisionOperator::class,
            ExponentiationOperator::class,
            ModuloOperator::class,
            MultiplicationOperator::class,
            SubtractionOperator::class,
            LogicEqualOperator::class,
            LogicNotEqualOperator::class,
            LogicGreaterThanOperator::class,
            LogicGreaterOrEqualOperator::class,
            LogicLessThanOperator::class,
            LogicLessOrEqualOperator::class,
            LogicOrOperator::class,
            LogicAndOperator::class,
            LogicThenOperator::class,
            LogicElseOperator::class,

            AbsFunction::class,
            ACosFunction::class,
            ACosHFunction::class,
            ASinFunction::class,
            ASinHFunction::class,
            ATanFunction::class,
            ATanHFunction::class,
            ATanTwoFunction::class,
            CeilFunction::class,
            CosFunction::class,
            CosHFunction::class,
            DegToRadFunction::class,
            EnFunction::class,
            ExpFunction::class,
            ExpMOneFunction::class,
            FloorFunction::class,
            FModFunction::class,
            GetRandMaxFunction::class,
            HypotFunction::class,
            LogFunction::class,
            LogOnePFunction::class,
            LogTenFunction::class,
            MaxFunction::class,
            MinFunction::class,
            MTGetRandMaxFunction::class,
            MTRandFunction::class,
            PowFunction::class,
            RadToDegFunction::class,
            RandFunction::class,
            RoundFunction::class,
            SinFunction::class,
            SinHFunction::class,
            SqrtFunction::class,
            TanFunction::class,
            TanHFunction::class,
        ];

        return $symbols;
    }

}