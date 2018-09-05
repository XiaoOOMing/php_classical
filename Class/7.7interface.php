<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/4
 * Time: 18:42
 */
// 要求子类有相同的方法，但不继承同一个类
interface NameInterface
{
    public function setName($name);
    public function getName();
}

// 最佳实现
trait NameChanger
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

// 利用trait实现了接口
class Book implements NameInterface
{
    use NameChanger;
}

$book = new Book();
$book->setName('PHP经典案例');
echo $book->getName();
