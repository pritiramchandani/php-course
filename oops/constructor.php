<?php

// PHP - _contruct function  (Start with two underscores(--))

// * it is automatically called when creating object from cLass


// Properties

class Fruit{
    public $name;
    public $color;


    // Contructor

    function __construct($name,$color){
        $this-> name = $name;
        $this-> color = $color;
        
    }
    // Method
    function get_name(){
        return $this->name;
}

function get_color(){
    return $this->color;
}

}
$apple = new Fruit("Apple" ,"Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();




