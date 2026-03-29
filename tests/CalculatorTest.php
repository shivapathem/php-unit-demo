<?php
 
use PHPUnit\Framework\TestCase;
 
require_once __DIR__ . '/../src/Calculator.php';
 
class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
    }
 
    public function testSubtract()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->subtract(3, 2));
    }
 
    public function testMultiply()
    {
        $calc = new Calculator();
        $this->assertEquals(6, $calc->multiply(2, 3));
    }
 
    public function testDivide()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->divide(4, 2));
    }
 
    public function testDivideByZero()
    {
        $this->expectException(Exception::class);
        $calc = new Calculator();
        $calc->divide(5, 0);
    }
}
