<?php

// Constant
// Constant cannot be changes once iti is declared.
// class constant are useful to define constant data within a class.
//  class constant is defined using "const" keyword within a class.
//  they are case sensitive.
//  class contantat should be named in all UPPERCASE.


class Food{

    const ABOUT= "I love chinese food";



    // Method
    // Creating an object from inside (we can use self keywords)


    public function aboutfood(){
        echo self::ABOUT;
    }
}

$favfood = new Food();
$favfood ->aboutfood();

// (From not crating an object)

// echo Food::ABOUT;