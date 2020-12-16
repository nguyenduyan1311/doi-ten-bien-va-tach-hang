<?php
require __DIR__ . "/../src/Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate('1', '1', 'ADDITION');
        $this->assertEquals($expected, $result);
    }



}
