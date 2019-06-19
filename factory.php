<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/19
 * Time: 18:48
 */

//工厂模式
abstract class Factory{
    public abstract function getResult($number1,$number2);
}

//+方法
class add extends Factory {
    public function getResult($number1,$number2){
        return $number1 + $number2;
    }
}

class reduce extends Factory {
    public function getResult($number1,$number2){
        return $number1 - $number2;
    }
}



class OperationFactory{

    public $op = null;

    public function createOperation($symbol){
        switch ($symbol ){
            case '+':
                $this->op =new add();
                break;
            case '-':
                $this->op =new reduce();
                break;
        }
        return $this->op;
    }
}

//工厂模式的使用
//$op = new OperationFactory();
//echo $op->createOperation('-')->getResult(1,2);
///


//工厂方法
abstract class IFactory{
    public abstract function createOperation();
}

class addIFactory extends IFactory{
    public function createOperation()
    {
        // TODO: Implement createOperation() method.
        return new add();
    }
}

class reduceIFactory extends IFactory{
    public function createOperation()
    {
        // TODO: Implement createOperation() method.
        return new reduce();
    }
}


//操作过程
$op = new addIFactory();

echo $op->createOperation()->getResult(1,2);