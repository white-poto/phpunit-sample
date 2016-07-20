PHPUnit 样例
==========

说明
---
+ 项目自动加载使用composer管理
+ tests\CalculatorTest类所继承的\PHPUnit_Framework_TestCase类，为PHPUnit单元测试类，该类有两种方式注入（include）
 - 使用composer require方式，以package的形式导入
 - 执行phpunit xxx（执行时phpunit命令会自动注入该类）
+ 如果你希望IDE可以对PHPUnit_Framework_TestCase类进行一些代码提示，可以将PHPUnit的源码下载到本地，
使用IDE的include配置功能（file -> setting -> languages & frameworks -> PHP -> include），IDE就可以进行代码提示了
+ 单元测试类已经建好（tests\CalculatorTest.php），你只需要在这个类中填充相应的方法即可
+ [phpunit官方文档](https://phpunit.de/manual/current/zh_cn/index.html "PHPUnit")

执行测试
----
```shell
> cd /path/to/phpunit-sample
> phpunit
```

要求
-----------
+ 对src\Calculator类进行测试，测试用例需满足src\Calculator注释要求
+ 有能力的童鞋，可以尝试生成单元测试覆盖度报告以及代码质量报告

开源持续集成测试
--------
+ [travis-ci https://travis-ci.org/huyanping/phpunit-sample](https://travis-ci.org/huyanping/phpunit-sample "phpunit-sample")
+ [circle-ci https://circleci.com/gh/huyanping/phpunit-sample](https://circleci.com/gh/huyanping/phpunit-sample "phpunit-sample")