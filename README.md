PHPUnit 样例
==========
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/huyanping/phpunit-sample/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/huyanping/phpunit-sample/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/huyanping/phpunit-sample/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/huyanping/phpunit-sample/?branch=master)
[![Travis-ci](https://travis-ci.org/huyanping/phpunit-sample.svg)](https://travis-ci.org/huyanping/phpunit-sample.svg)


说明
---
+ 项目自动加载使用`composer`管理
+ `tests\CalculatorTest`类所继承的`\PHPUnit_Framework_TestCase`类，为PHPUnit单元测试类，该类有两种方式注入（include）
 - 使用`composer require`方式，以package的形式导入
 - 执行`phpunit xxx`(执行时phpunit命令会自动注入该类）
+ 如果你希望IDE可以对`PHPUnit_Framework_TestCase`类进行一些代码提示，可以将PHPUnit的源码下载到本地，
使用IDE的include配置功能（`file -> setting -> languages & frameworks -> PHP -> include`），IDE就可以进行代码提示了
+ 单元测试类已经建好（`tests\CalculatorTest.php`），你只需要在这个类中填充相应的方法即可
+ [phpunit官方文档](https://phpunit.de/manual/current/zh_cn/index.html "PHPUnit")

执行测试
----


要求
-----------
+ 对`src\Calculator`类进行测试，测试用例需满足`src\Calculator`注释要求
+ 有能力的童鞋，可以尝试生成单元测试覆盖度报告以及代码质量报告

操作流程
----
+ 代码下载
```shell
> git clone https://github.com/huyanping/phpunit-sample.git
> cd phpunit-sample
```
+ 对`Calculator`类的所有方法编写单元测试
```shell
vim tests/CalculatorTest.php
```
+ 执行单元测试
```shell
> phpunit
```

开源持续集成测试
--------
托管于github等开源代码托管平台的项目，可使用一下几个持续集成工具  

+ [travis-ci https://travis-ci.org/huyanping/phpunit-sample](https://travis-ci.org/huyanping/phpunit-sample "phpunit-sample")
+ [circle-ci https://circleci.com/gh/huyanping/phpunit-sample](https://circleci.com/gh/huyanping/phpunit-sample "phpunit-sample")
+ [scrutinizer-ci https://scrutinizer-ci.com/g/huyanping/phpunit-sample/](https://scrutinizer-ci.com/g/huyanping/phpunit-sample/ "phpunit-sample")