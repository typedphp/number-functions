<?php

namespace TypedPHP\Functions\NumberFunctions;

/**
 * @param float|int $number
 *
 * @return float
 */
function absolute($number)
{
    return (float) \abs($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function arcCosine($number)
{
    return (float) \acos($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function arcSine($number)
{
    return (float) \asin($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function arcTangent($number)
{
    return (float) \atan($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function cosine($number)
{
    return (float) \cos($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function exponent($number)
{
    return (float) \exp($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function hyperbolicCosine($number)
{
    return (float) \cosh($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function hyperbolicSine($number)
{
    return (float) \sinh($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function hyperbolicTangent($number)
{
    return (float) \tanh($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function arcHyperbolicCosine($number)
{
    return (float) \acosh($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function arcHyperbolicSine($number)
{
    return (float) \asinh($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function arcHyperbolicTangent($number)
{
    return (float) \atanh($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function logarithm($number)
{
    return (float) \log($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function sine($number)
{
    return (float) \sin($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function squareRoot($number)
{
    return (float) \sqrt($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function tangent($number)
{
    return (float) \tan($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function degrees($number)
{
    return (float) \rad2deg($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function radians($number)
{
    return (float) \deg2rad($number);
}

/**
 * @param float|int $number
 * @param float|int $divisor
 *
 * @return float
 */
function modulus($number, $divisor)
{
    return (float) \fmod($number, $divisor);
}

/**
 * @param float|int $number
 * @param float|int $power
 *
 * @return float
 */
function power($number, $power)
{
    return (float) \pow($number, $power);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function round($number)
{
    return (float) \round($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function ceiling($number)
{
    return (float) \ceil($number);
}

/**
 * @param float|int $number
 *
 * @return float
 */
function floor($number)
{
    return (float) \floor($number);
}

/**
 * @param int $min
 * @param int $max
 *
 * @return int
 */
function random($min, $max)
{
    return (int) \mt_rand($min, $max);
}

/**
 * @param $number
 * @param $min
 * @param $max
 *
 * @return mixed
 */
function limit($number, $min, $max)
{
    if ($number < $min) {
        return $min;
    }

    if ($number > $max) {
        return $max;
    }

    return $number;
}
