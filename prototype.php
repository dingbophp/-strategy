<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/20
 * Time: 19:19
 */

//原型模式
abstract class PrototypeFather{
    public abstract function Clone1();
}

class workExperience {
    public $work='';
    public $company='';

}

class Resume{
    private $name='';
    private $sex='';
    private $age='';
    private $work = '';

    public function __construct($name)
    {
        $this->name = $name;
        $this->work = new workExperience();
    }

    public function SetPersonalInfo($sex,$age){
        $this->age = $age;
        $this->sex = $sex;
    }

    public function setWork($work,$company){
        $this->work->work = $work;
        $this->work->company = $company;
    }

    public function display(){
        echo $this->name .':'.$this->age.'->'.$this->sex;
        echo '<br>';
        echo  $this->work->work .':'. $this->work->company ;
    }
}


$re = new Resume('A1');
var_dump($re);
$re->SetPersonalInfo('nv',12);
$re->setWork('beijing','songrongtong');
$re->display();

$re1 = clone $re;
var_dump($re1);
$re1->SetPersonalInfo('nnan1',13);
$re1->setWork('beijing1','songrongtong1');
$re1->display();