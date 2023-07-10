<?php

//  PHP will automatically call this function at the end of the script.
// called when object is destruted or the script is stopped.


// class Food{
//     public $name;                                          
//     public $cuisine;

//     // Constructor

//     function __construct($cuisine){
//         $this ->cuisine=$cuisine;
//     }

//     function set_name($name){
//         $this->name=$name;  
//     }
//     function get_name(){
//         return $this->name; 
//     }

//     // Destructor

//     function __destruct(){
//         echo "I love".$this->cuisine."food";
//     }
// }

// $dosa = new Food("Chinese");



class Fruit{
    public $name;
    public $color;

    function __construct($color){
        $this ->name=$color;
    }

    function set_name($name){
        $this ->name=$name;
    }
    function get_name(){
        return $this->name;
    }

    // Destructor

    function __destruct(){
        echo "Ilovethis".$this->name."fruitttttt";
    }
  
}
$apple = new Fruit("Apple");
