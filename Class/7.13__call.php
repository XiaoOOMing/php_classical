<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/5
 * Time: 9:12
 */
// 聚合对象，将两个对象方法合并
class Address
{
    protected $city;

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }
}

class Person
{
    protected $name;
    protected $address;

    public function __construct()
    {
        $this->address = new Address();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    // 调用无法访问的方法时，__call会被调用
    public function __call($name, $arguments)
    {
        if (method_exists($this->address, $name)) {
            return call_user_func_array([$this->address, $name], $arguments);
        }
    }
}

$man = new Person();
$man->setName('John');
var_dump($man->getName());
$man->setCity('China');
var_dump($man->getCity());
