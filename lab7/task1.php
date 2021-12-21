<?php

class Rectangle{
    private  $width;
    private  $height;


    function __construct($w,$h){
        $this->width = $w;
        $this->height = $h;
    }

    function setWidth($w){
        $this->width = $w;
    } 
    function setHeight($h){
        $this->height = $h;
    }

    function getWidth(){
        return $this->width;
    }

    function getHeight(){
        return $this->height;
    }

    function showArea(){
        echo "Area = ". $this->width*$this->height . "<br>";
    }
}

    // $a = new Rectangle();
    // $a -> setWidth(5);
    // $a -> setHeight(6);

    // $a -> showArea();

    $x = new Rectangle(9,5);
    $x -> showArea();

?>