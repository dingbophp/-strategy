<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/26
 * Time: 19:25
 */

//建造者模式
//具体的产品
class Product{
    public $product = [];
    public function add($name){
        $this->product[]=$name;
    }

    public function show(){
        foreach ($this->product as $key=>$value){
            echo $value;//展示新增的东西
        }
    }
}



//基类建设者
abstract class Builder{
    public abstract function buildPartA();
    public abstract function buildPartB();
    public abstract function getResult();
}


//指挥者
class Director{
    public $builder = null;
    public function __construct(Builder $builder)
    {
        $this->builder =$builder;
    }

    public function show(){
        $this->builder->buildPartA();
        $this->builder->buildPartB();
    }

    public function showB(){
        $this->builder->buildPartB();
    }
}

//建设者A
class BuilderA extends Builder {
    private $product = null;
    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        // TODO: Implement buildPartA() method.
        $this->product->add('jian zao A de a fanfa');

    }

    public function buildPartB()
    {
        // TODO: Implement buildPartB() method.
        $this->product->add('jiao zao A de b method');
    }

    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->product->show(); //返回了建造者对象
    }
}

//建造者B
class BuilderB extends Builder {
    private $product = null;
    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        // TODO: Implement buildPartA() method.
        $this->product->add('jian zao B de a fanfa');

    }

    public function buildPartB()
    {
        // TODO: Implement buildPartB() method.
        $this->product->add('jiao zao B de b method');
    }

    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->product->show(); //返回了生产者对象
    }
}



$builder_a = new BuilderA();
$builder_b = new BuilderB();
//由指挥者 指挥建造者生成出 产品
$director =    new Director($builder_a);
$director->showB();  //选择生产组件
$builder_a->getResult();//获取建造出来的对象
