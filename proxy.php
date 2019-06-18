<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/18
 * Time: 18:44
 */
//代理父类
abstract class ProxyFather{
    abstract function setMoney();
    abstract function setFlower();
    abstract function setTea();
}

//真实的最求者
class RealPursuer extends ProxyFather {
    public $name ='';
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setFlower()
    {
        // TODO: Implement getFlower() method.
        echo 'send flower：' .$this->name ;
    }
    public function setMoney()
    {
        // TODO: Implement getMoney() method.
        echo 'send money：' .$this->name ;
    }
    public function setTea()
    {
        // TODO: Implement getTea() method.
        echo 'send tea：' .$this->name ;
    }
}

//代理类
class Proxy extends ProxyFather{
    public $proxy = null;
    public function __construct($name)
    {

        $this->proxy = new RealPursuer($name);
    }

    public function setTea()
    {
        // TODO: Implement getTea() method.
       $this->proxy->setTea();
    }
    public function setMoney()
    {
        // TODO: Implement getMoney() method.
        $this->proxy->setMoney();
    }
    public function setFlower()
    {
        // TODO: Implement getFlower() method.
        $this->proxy->setFlower();
    }
}



$new_gg = new Proxy('MM');

$new_gg->setFlower();
$new_gg->setMoney();
$new_gg->setTea();