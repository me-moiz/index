<?php

// class Account{
//     private $balance;

//     public function getBalance(){
//         return $this->balance;
//     }

//     public function Deposit($amount){
//         if($amount > 0){
//             $this->balance += $amount;
//         }
//         else{
//             echo "Deposit Amount will be greater than zero";
//         }
//     }

//     public function withdraw($amount){
//         if($amount <= $this->balance){
//             $this->balance -= $amount;
//         }
//         else{
//             echo "withdraw amount will be greater then zero";
//         }
//     }
// }
// echo "welcome to BHL ATM system <br>";

// $account = new Account();
// $account->Deposit(amount: 10000);
// $account-> withdraw(amount:1000);

// echo $account->getBalance();




// class Animal{
//     public function Makesound(){
//         echo "Animal make a sound <br>";
//     }
// }

// class Cat extends Animal{
//     public function Makesound(){
//         echo "Cat make a sound <br>";
//     }
// }

// class Dog extends Animal{
//     public function Makesound(){
//         echo "Dog make a sound <br>";
//     }
// }

// $cat = new Cat();
// $cat-> Makesound();

// $dog = new Dog();
// $dog-> Makesound();


abstract class Vehicle{
    abstract public function Start_Engine();
    abstract public function Stop_Engine();
    abstract public function Broken_Engine();
}

class Car extends Vehicle{

    public function Start_Engine(){
        echo "Engine Started <br>";
    }
    public function Stop_Engine(){
        echo "Engine Stopped <br>";
    }
    public function Broken_Engine(){
        echo "Broken Started <br>";
    }
}

$car = new Car();
$car-> Start_Engine();

$car-> Stop_Engine();
$car->Broken_Engine();
?>