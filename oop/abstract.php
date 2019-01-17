<?php
    //class + interface
    abstract class Person{
          public function sayHello(){
              echo "Hello,";
              $this->introduceSelf();
          }
          abstract public function introduceSelf(); //moi thang con deu co 1 cach introduce rieng, khong thang nao giong thang nao, nhung bat buoc phai co dn
    }
    class Employee extends Person{
        public function introduceSelf()
        {
            echo "my name is Employee";
            // TODO: Implement introduceSelf() method.
        }


    }
    class Boss extends Person{

        public function introduceSelf()
        {
            echo "my name is Boss";
            // TODO: Implement introduceSelf() method.
        }
    }
    class President extends Person{
        public  function  introduceSelf()
        {
            // TODO: Implement introduceSelf() method.
            echo "i am a president";
        }
    }

    $em = new Employee();
    $em->sayHello();
    echo "\n<br>";
    $boss = new Boss();
    $boss->sayHello();
    echo "<br/>";
    $president=new President();
    $president->sayHello();
?>