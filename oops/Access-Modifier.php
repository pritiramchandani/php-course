<?php

// PHP-Access Modifier

// 3 types Acces Modifier
// 1) Public[default]
// 2) Private
// 3) Protected
// If all properties are public and method is private or protected then it will show error.


class Space{
    public $publicpark;
    protected $home;
    private $room;
}

$availablespace = new Space();
echo $availablespace-> publicpark = "Ashok Udhyan is public";
echo "<br>";
// echo $availablespace-> home = "home is protected";
// echo "<br>";                                          (ERROR)
// echo $availablespace-> room = "room is private";