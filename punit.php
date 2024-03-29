<?php

use app\controller\Index;
use muyomu\aop\exception\AopException;
use muyomu\inject\annotation\AutoWired;
use muyomu\punit\GenericTest;
use muyomu\punit\utility\TestUtility;

include "vendor/autoload.php";
include "application.php";

class MyTest extends GenericTest
{
    #[AutoWired(TestUtility::class)]
    private TestUtility $testUtility;

    /**
     * @throws ReflectionException
     * @throws AopException
     */
    public function Test(): void
    {
        echo $this->testUtility->Test(Index::class,"index",array());
    }
}

MyTest::run(MyTest::class);