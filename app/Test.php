<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 1/12/2016
 * Time: 11:26 PM
 */

namespace app;


use Parse\ParseObject;

class Test
{
    public function test()
    {
        $testObject = ParseObject::create("TestObject");
        $testObject->set("foo", "bar");
        $testObject->save();
    }
}