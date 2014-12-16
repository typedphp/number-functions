<?php

namespace TypedPHP\Functions\NumberFunctions\Test;

use TypedPHP\Functions\NumberFunctions;

class NumberFunctionTest extends Test
{
    public function testRound()
    {
        $this->assertEquals(1, NumberFunctions\round(1.4));
        $this->assertEquals(2, NumberFunctions\round(1.5));
    }

    public function testCeiling()
    {
        $this->assertEquals(2, NumberFunctions\ceiling(1.4));
    }

    public function testFloor()
    {
        $this->assertEquals(1, NumberFunctions\floor(1.5));
    }

    public function testAbsolute()
    {
        $this->assertEquals(0.5, NumberFunctions\absolute(-0.5));
    }

    public function testArcCosine()
    {
        $this->assertEquals(acos(0.5), NumberFunctions\arcCosine(0.5));
    }

    public function testArcSine()
    {
        $this->assertEquals(asin(0.5), NumberFunctions\arcSine(0.5));
    }

    public function testArcTangent()
    {
        $this->assertEquals(atan(0.5), NumberFunctions\arcTangent(0.5));
    }

    public function testHyperbolicCosine()
    {
        $this->assertEquals(cosh(0.5), NumberFunctions\hyperbolicCosine(0.5));
    }

    public function testHyperbolicSine()
    {
        $this->assertEquals(sinh(0.5), NumberFunctions\hyperbolicSine(0.5));
    }

    public function testHyperbolicTangent()
    {
        $this->assertEquals(tanh(0.5), NumberFunctions\hyperbolicTangent(0.5));
    }

    public function testInverseHyperbolicCosine()
    {
        $this->assertEquals(acosh(1.5), NumberFunctions\arcHyperbolicCosine(1.5));
    }

    public function testInverseHyperbolicSine()
    {
        $this->assertEquals(asinh(0.5), NumberFunctions\arcHyperbolicSine(0.5));
    }

    public function testInverseHyperbolicTangent()
    {
        $this->assertEquals(atanh(0.5), NumberFunctions\arcHyperbolicTangent(0.5));
    }

    public function testLogarithm()
    {
        $this->assertEquals(log(0.5), NumberFunctions\logarithm(0.5));
    }

    public function testModulus()
    {
        $this->assertEquals(fmod(1.5, 0.5), NumberFunctions\modulus(1.5, 0.5));
    }

    public function testPower()
    {
        $this->assertEquals(pow(1.5, 0.5), NumberFunctions\power(1.5, 0.5));
    }

    public function testSine()
    {
        $this->assertEquals(sin(0.5), NumberFunctions\sine(0.5));
    }

    public function testSquareRoot()
    {
        $this->assertEquals(sqrt(0.5), NumberFunctions\squareRoot(0.5));
    }

    public function testTangent()
    {
        $this->assertEquals(tan(0.5), NumberFunctions\tangent(0.5));
    }

    public function testDegrees()
    {
        $this->assertEquals(rad2deg(0.5), NumberFunctions\degrees(0.5));
    }

    public function testRadians()
    {
        $this->assertEquals(deg2rad(0.5), NumberFunctions\radians(0.5));
    }

    public function testRandom()
    {
        for ($i = 0; $i < 5; $i++) {
            $random = NumberFunctions\random(5 * $i, 10 * $i);

            $this->assertGreaterThanOrEqual(5 * $i, $random);
            $this->assertLessThanOrEqual(10 * $i, $random);
        }
    }

    public function testLimit()
    {
        $this->assertEquals(5, NumberFunctions\limit(3, 5, 10));
        $this->assertEquals(10, NumberFunctions\limit(12, 5, 10));
        $this->assertEquals(7, NumberFunctions\limit(7, 5, 10));
    }

    public function testExponent()
    {
        $this->assertEquals(exp(0.5), NumberFunctions\exponent(0.5));
    }

    public function testCosine()
    {
        $this->assertEquals(cos(0.5), NumberFunctions\cosine(0.5));
    }
}
