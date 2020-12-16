<?php
require __DIR__ . "/../src/Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {

        $expected = 8;

        $calculator = new Calculator();
        $result = $calculator->calculate('5','3','ADDITION');
        $this->assertEquals($expected, $result);
    }


}