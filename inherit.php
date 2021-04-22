<?php
    // parent class
    class Human {
        // public property name
        public $name;
        
        // public function walk
        public function walk() {
            echo $this->name. " is walking...<br/>";
        }
        
        // public function see
        public function see() {
            echo $this->name. " is seeing...<br/>";
        }
    }
    
    // child class
    class Male extends Human {
        // No code in child
    }
    
    // child class
    class Female extends Human {
        // No code in child
    }
    
    $male = new Male();
    $male->name = "Newton";
    
    $female = new Female();
    $female->name = "New";
    
    // calling Human class methods
    // check the output (hehe, pun intended)
    $female->walk();
    $male->see();
    
?>

<?php

session_start(); //start the PHP_session function 

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['page_count'];

?>