<?php

class Box{
    private  $lenght;
    private  $width;
    private  $height;
    


    function __construct($l,$w,$h){
        $this->lenght = $l;
        $this->width = $w;
        $this->height = $h;
    }
 

    function getArea(){
        echo "Area = ". ($this->lenght*$this->width*$this->height) . "<br>";
    }
}


    $x = new Box(4,3,5);
    $x -> getArea();
    

?>