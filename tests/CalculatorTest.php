<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAddOperation(): void
    {
        $adder = new Calculator("add");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals($value, 5);
    }

    public function testSubtractOperation(): void
    {
        $adder = new Calculator("subtract");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals($value, -1);
    }
    
    //test case for multiply operation
    public function testMultiplyOperation(): void
    {
        $adder = new Calculator("multiply");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals($value, 6);
    }
}
