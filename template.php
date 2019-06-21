<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/21
 * Time: 18:43
 */
//模板模式

 class template{
    public  function questionA(){
        echo 'A is ';
        $this->answerA();
    }
    public  function questionB(){
        echo 'B is';
        $this->answerB();
    }
    public  function questionC(){
        echo 'C is';
        $this->answerC();
    }

    public function answerA(){
    }
     public function answerB(){
         echo '2';
     }
     public function answerC(){
         echo '3';
     }

}


class people1 extends template{


    public function answerA(){
        echo 'a';
    }
    public function answerB(){
        echo 'b';
    }
    public function answerC(){
        echo 'c';
    }
}

$people = new people1();
$people->questionA();
$people->questionB();
