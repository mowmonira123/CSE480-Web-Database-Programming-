<?php
    session_start();
    include('db.php');
?>

<?php
    if(isset($_POST['submit'])){
        $Id = $_POST['Id'];
        $password = $_POST['password'];
        $con_password = $_POST['con_password'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $test = 0;

        if(!preg_match("/^[a-zA-Z- ]+$/", $name)){
            $en = "invalid name format <br>";
            $test = 1;
        }
        if(!(preg_match("/^([_a-zA-Z0-9]+)(\.[_a-zA-Z0-9]+)*@([_a-zA-Z0-9]+)(\.[_a-zA-Z0-9]+)*(\.[_a-zA-Z0-9]+)$/i", $email))){
            $ee = "Invalid email format <br>";
            $test = 1;
        }
        if(!(preg_match("/^([a-zA-Z0-9]){8,}$/",$password)) && ($password == $con_password)){
            $ep = "Password must be atleast 8 letters (special character not allowed) <br>";
            $test = 1;
        }
        if(!preg_match("/^([0-9\-]+) $/", $Id)){
            $ei = "Invalid Id format <br>";
            $test = 1;
        }
        if($type == 'User'){
            $et = "Please select user type <br>";
        }
        
        if($test == 0){
            $query = "INSERT INTO user (id,password,name,email,type) VALUES ('$Id','$password','$name','$email','$type')";

            $result = mysqli_query($con,$query); 

             
           if($result){
                header('Location:login.php');
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .section{
            align-items: center;
            align-content: center;
            align-self: center;
            border: black solid 1px;
            margin: 150px 300px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="section">
        <h1>Registration</h1>
        <form action="">
            <label for="Id">ID:</label><br>
            <input type="text" name="Id" id="Id"> <br>
            <h4><?php if(isset($ei)) echo $ei ?></h4>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password"><br>
            <h4><?php if(isset($ep)) echo $ep ?></h4>

            <label for="con_password">Confirm Password: </label><br>
            <input type="password" name="con_password" id="con_password"><br>
            <h4><?php if(isset($ep)) echo $ep ?></h4>

            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name"><br>
            <h4><?php if(isset($en)) echo $en ?></h4>
            
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br>
            <h4><?php if(isset($ee)) echo $ee ?></h4>

            <label for="type">User Type [User/Admin]</label><br>
            <select name="type" id="type">
                <option value="" selected>User</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <h4><?php if(isset($et)) echo $et ?></h4>
            <hr>
            <button type="submit" name="submit">Register</button>
            <a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>