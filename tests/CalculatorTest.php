<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2016/7/20
 * Time: 9:31
 */

namespace Jenner\PHPUnit\Sample\Test;


use Jenner\PHPUnit\Sample\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * demo
     */
    public function testAdd() {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }
}