<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/25
 * Time: 19:06
 */

//系统子类
class SystemOne{
    public function MethodOne(){
        echo 'One class';
    }
}

class SystemTwo{
    public function MethodTwo(){
        echo 'Two class';
    }
}

class SystemThree{
    public function MethodThree(){
        echo 'Three class';
    }
}

class SystemFour{
    public function MethodFour(){
        echo 'Four class';
    }
}




//外观模式

class Facade{

    public $one =null ;
    public $two =null ;
    public $three =null ;
    public $four =null ;

    public function __construct()
    {
        $this->one = new SystemOne();
        $this->two = new SystemTwo();
        $this->three = new SystemThree();
        $this->four = new SystemFour();
    }

    public function facadeA(){
        $this->two->MethodTwo();
        $this->three->MethodThree();
    }
    public function facadeB(){
        $this->four->MethodFour();
        $this->three->MethodThree();
    }

}


$facade = new Facade();

$facade->facadeB();