<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2016/7/20
 * Time: 9:15
 */

namespace Jenner\PHPUnit\Sample;

class Calculator
{
    /**
     * 需要正确性测试、边界值测试
     *
     * @param $x
     * @param $y
     * @return mixed
     */
    public function add($x, $y)
    {
        return $x + $y;
    }

    /**
     * 需要正确性测试、边界值测试
     *
     * @param $x
     * @param $y
     * @return float
     */
    public function division($x, $y)
    {
        return $x / $y;
    }

    /**
     * 需要正确性测试、边界值测试
     *
     * @param $x
     * @param $y
     * @return mixed
     */
    public function multi($x, $y)
    {
        return $x * $y;
    }

    /**
     * 需要正确性测试、边界值测试
     *
     * @param $x
     * @param $y
     * @return mixed
     */
    public function sub($x, $y)
    {
        return $x - $y;
    }

    /**
     * 需要进行路径覆盖测试
     *
     * @param $x
     * @return bool
     */
    public function isOdd($x)
    {
        if ($x % 2 === 1) {
            return true;
        }
        return false;
    }

    /**
     * 需要路径覆盖、异常捕获测试
     *
     * @param $x
     * @return bool
     */
    public function isDouble($x) {
        if(is_string($x)) {
            throw new \InvalidArgumentException("type error. need double param, string given.");
        }
        if(is_double($x)) {
            return true;
        }
        return false;
    }
}