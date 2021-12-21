<?php

class Student{
    private $name;
    private $id;
    private $CGPA;

    function __construct($name,$id,$cgpa){
        $this->name = $name;
        $this->id = $id;
        $this ->CGPA = $cgpa;
    }

    function averageCGPA($obj){
        echo "Average CGPA: " . ($obj->CGPA + $this->CGPA)/2 . "<br>";
    }

}

    $x = new Student("kamarun","60106",3.40);
    $y = new Student("monira", "60134",3.60);

    $y -> averageCGPA($x);

?>