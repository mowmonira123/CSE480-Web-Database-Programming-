<?php

class Calculator{
    private  $myValue;
    


    function __construct($value){
        $this->myValue = $value;
    }

    function setValue($value){
        $this->myValue = $value;
    } 

    function square(){
        echo "Squared value = ". $this->myValue*$this->myValue . "<br>";
    }
    function qube(){
        echo "Quebed value = ". $this->myValue*$this->myValue*$this->myValue . "<br>";
    }
}

     //$a = new Calculator();
     //$a -> setValue(5);
     //$a -> square();
     //$a -> qube();

    $x = new Calculator(2);
    $x -> square();
    $x -> qube();

?>