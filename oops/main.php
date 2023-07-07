<?php

// class arthmetic{

//    public $a=2;
//    public $b=4;
// function add($a,$b){
//     print($a+$b);
// }
    
// }





// $arthmetic=new arthmetic;
// $arthmetic->add(5,6);


class arthmetic{
    public $a=5;
    public $fact=1;
    function fun($a,$fact){
        
      
        for($i=$a; $i>0; $i--){
            $fact= $i*$fact;
            print($i."x");
        
        }
        
        
        
    }

}

$arthmetic=new arthmetic;
$arthmetic->fun(5,1);