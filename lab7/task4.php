<?php

class Circle{
    private  $radius;
    
    function setRadius($r){
         $this->radius = $r;
    }

    function area(){
        echo "Area = ". (3.1416*$this->radius*$this->radius) . "<br>";
    }
    function circumference(){
        echo "Circumference = ". (2*3.1416*$this->radius) . "<br>";
    }
}


    $x = new Circle();
    $x -> setRadius(9);
    $x -> area();
    $x -> circumference();

?>