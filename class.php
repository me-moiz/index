<?php

// class Fruit{
//     public $name;
//     public $color;


//     function set_Name($name){
//         $this->name = $name;
//     }

//     function get_Name(){
//         return $this->name;
 
//    }
//    function set_Color($Color){
//     $this->Color = $Color;
// }

// function get_Color(){
//     return $this->name;
// }
// }

// $fruit = new Fruit();
// $fruit->set_Name("apple");
// echo $fruit->get_name();

// $fruit = new Fruit();
// $fruit->set_Color("red");
// echo "Hello my name is moiz and my fruit name is apple" . $fruit->get_name("apple") . "and my fruit color is red" . $fruit->get_color("red");


class Animal{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function show(){
        echo $this->name;
    }
}

class dog extends Animal{
    public function details(){
        echo "my dog name is" . $this->name . "and this age is" . $this->age;
    }
}

$Animal = new Animal("foxy",4);
$dog = new Dog("Tommy",2);
$dog->details();

?>