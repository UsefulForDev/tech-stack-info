<?php


namespace App\Tests\Util;
use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(20, 30);
        self::assertEquals(50, $result);
    }

}
