<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'lab8';

    $con = mysqli_connect($server,$user,$password,$database);

    if(!$con){
        echo "error ". mysqli_connect_error($con);
    }
?>