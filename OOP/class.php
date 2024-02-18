<?php

// class FERSON {
//     public function name{

//     }
//     public function age{

//     }
// }


/// another example

// class FERSON {
//     public function name{

//     }
//     public function age{
        
//     }
// }


// new = create new object sa class
// class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }






// practice
// tarunga basaha ang error
// class human {
//     public $name;
//     public $age;

//     function set_name($name) {
//         $this->name = $name;
//     }
//     function get_name() {
//         return $this->name;
//     }
// }
// $chinese = new human(); // dapat correct and spelling
// $japanese = new Human(); // deli case-sensitive and human
// $chinese->set_name('Instik');
// $japanese->set_name('watashiwa');

// echo $chinese->get_name();
// echo "<br>";
// echo $japanese->get_name();
// //succesfully run

// practice
// tarunga basaha ang error
// class Ferson {
//     public $name;
//     public $age;

//     function set_name($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function get_name() {
//         return $this->name;
//     }
//     function get_age() {
//         return $this->age;
//     }
// }
// $name = new ferson(); // dapat correct and spelling

// $name->set_name('Lumiguid', 12);


// echo $name->get_name();
// echo "<br>";
// echo $name->get_age();
// echo "<br>";
//succesfully run






// class human {
//     public $name;
//     public $age;

//     function set_name($name) {
//         $this->name = $name;
//     }
//     function set_age($age) {
//         $this->age = $age;
//     }
//     function get_name() {
//         return $this->name;
//     }
//     function get_age() {
//         return $this->age;
//     }
// }
// $name = new human(); 
// $age = new human();

// $name->set_name('tina pai');
// $age->set_age(33);

// echo $name->get_name();
// echo "<br>";
// echo $age->get_age();
//succesfully run

// has a lot of built-in function
// "__construct" (two underscore) built-in function






// practice
// tarunga basaha ang error
// class tawo {
//     public $name;
//     public $age;
//     public $gender;

//     function __contruct($name, $age, $gender) {
//         $this->name = $name;
//         $this->age = $age;
//         $this->gender = $gender;
//     }

//     function displayInfo() 
//     {
//         echo "Name" . $this->name . "<br>";
//         echo "Age"  . $this->age . "<br>";
//         echo "Gender" . $this->gender . "<br>";
//     }

// }

// // to display sulod sa class (mauni sa ubos)
// //Creating an object of Ferson class
// $person1 = new tawo('Jhon doe', 20, 'Male');

// // Displaying 

// $person1->displayInfo();

//succesfully run

// class car {
//     public $brandname;
//     public $color;
//     public $price;

//     function __construct($brandname, $color, $price){
//         $this->brandname = $brandname;
//         $this->color = $color;
//         $this->price = $price;
//     }

//     function display(){
//         echo "Car brand: ". $this->brandname . "<br>";
//         echo "Car color: ". $this->color . "<br>";
//         echo "Price: " . $this->price . "<br>";
//     }
// }

// $car1 = new car('Toyota', 'White', 1200000);
// $car2 = new car('Honda', 'blue', 123451);

// $car1->display();
// echo "<br>";
// $car2->display();


class humans {
    public $name;
    public $age;
    public $birthyear;

    function __construct($name, $age, $birthyear) {
        $this->name = $name;
        $this->age = $age;
        $this->birthyear = $birthyear;
    }

    function display(){
        echo "Name: ". $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "birthyear: ". ($birthyear - $this->age) . "<br>";
        if($this->age <= 18) { //less than or equal to
            echo "you are alien! bata ka pa!";
        } else {
            echo "This human is adult!";
        }
    }
}

$human = new humans('Mark jhon', 12 , 2005);
$human2 = new humans('tina pai', 30, 2012);

$human->display();
echo "<br>";
echo "<br>";
$human2->display();