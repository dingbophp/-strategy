<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/7/1
 * Time: 23:18
 */
//观察者模式

//通知者接口
interface Subject
{


    public function Attache(Observer $observer);

    public function Detach(Observer $observer);

    public function getAction();

}


//通知者1
class SubjectA implements Subject
{
    public $observers =[];

    public function Attache(Observer $observer)
    {
        // TODO: Implement Attache() method.
        $this->observers[]=$observer;

    }
    public function Detach(Observer $observer)
    {
        // TODO: Implement Detach() method.
        unset($this->observers[array_search($observer, $this->observers)]);
    }

    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }

    public function getAction()
    {
        // TODO: Implement getAction() method.
        return 'boss is leave';
    }
}

//通知者2
class SubjectB implements Subject
{
    public $observers ;

    public function Attache(Observer $observer)
    {


        // TODO: Implement Attache() method.
// TODO: Implement Attache() method.

        array_push(  $this->observers,$observer);

    }

    public function Detach(Observer $observer)
    {
        // TODO: Implement Detach() method.
        unset($this->observers[array_search($observer, $this->observers)]);

    }

    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }

    public function getAction()
    {
        // TODO: Implement getAction() method.
        return 'boss is come';
    }
}


//抽象观察者
abstract class Observer
{
    public $name = '';
    public $subject = null;

    public function __construct($name, Subject $subject)
    {
        $this->name = $name;
        $this->subject = $subject;
    }

    //操作行为
    abstract function  update();
}

//观察者1
class ObserverA extends Observer {
    public function __construct($name, Subject $subject)
    {
        parent::__construct($name, $subject);
    }

    public function update()
    {
        // TODO: Implement update() method.

        echo 'say '.$this->name.':'.$this->subject->getAction();
    }

}

class ObserverB extends Observer{
    public function __construct($name, Subject $subject)
    {
        parent::__construct($name, $subject);
    }

    public function update()
    {

        // TODO: Implement update() method.
        echo 'say '.$this->name.':'.$this->subject->getAction();
    }
}

//通知者
$subjectA = new SubjectA();

//观察者A
$observerA =   new ObserverA('xiaohong',$subjectA);

//观察者B
$observerB = new ObserverA('boyB',$subjectA);


$subjectA->Attache($observerA);
$subjectA->Attache($observerB);
//$subjectA->Detach($observerA);

$subjectA->notify();





