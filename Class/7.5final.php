<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/4
 * Time: 18:36
 */

// 添加final关键词的方法，无法被子类重写
class People
{
    public final function eat()
    {
        echo 'I can eat' . PHP_EOL;
    }
}

class Men extends People
{
    public function speak()
    {
        echo 'I am a man' . PHP_EOL;
    }

    public function eat()
    {
        echo 'Man to eat' . PHP_EOL;
    }
}

$man = new Men();
$man->eat();
$man->speak();
