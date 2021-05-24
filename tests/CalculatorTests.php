<?php

use deepak\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(6, 2);
        $this->assertEquals(8, $result);
    }
	public function testSubtract()
    {
        $result = $this->calculator->subtract(6, 2);
        $this->assertEquals(4, $result);
    }
	public function testMultiply()
    {
        $result = $this->calculator->multiply(6, 2);
        $this->assertEquals(12, $result);
    }
	public function testDivide()
    {
        $result = $this->calculator->divide(6, 2);
        $this->assertEquals(3, $result);
    }
 
}