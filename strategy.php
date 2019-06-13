<?php
/**
 *策略模式
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/13
 * Time: 20:40
 */

//策略父类
abstract class FactoryStrategy{
    abstract function getResult($money);//获取结果的方法
}

//策略子类A 原件
class StrategyA extends FactoryStrategy{

    public $money=0;

    public function __construct()
    {
    }

    public function getResult($money)
    {
        // TODO: Implement getResult() method.
        return $money;
    }
}

//策略子类b  折扣
class StrategyB extends FactoryStrategy{


    public $type=1;
    public function __construct($type)
    {

        $this->type= $type;
    }

    public function getResult($money)
    {
        // TODO: Implement getResult() method.
        return $money*$this->type;
    }
}

//策略子类C  //满减
class StrategyC extends FactoryStrategy{

    public $max=0;
    public $reduce=0;
    public function __construct($max,$reduce)
    {
        $this->max = $max;
        $this->reduce= $reduce;
    }

    public function getResult($money)
    {
        // TODO: Implement getResult() method.
        return $money - floor($money/$this->max )*$this->reduce;
    }
}

//策略 实施方
class implement{
    public $ca =null;
    public function __construct($type)
    {
        switch ($type){
            case 1:
                $ca = new StrategyA();
                break;
            case 2://折扣
                $ca = new StrategyB('0.8');
                break;
            case 3:
                $ca = new StrategyC('200','100');
                break;
        }
        $this->ca = $ca;
    }
    public function getResult($money){
        return $this->ca ->getResult($money);
    }
}


$im = new implement(3);
echo $im->getResult(100);

