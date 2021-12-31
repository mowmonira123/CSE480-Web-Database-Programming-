<?php
    session_start();
    include('db.php');
?>

<?php 
    if(isset($_POST['submit'])){
        $Id = $_POST['Id'];
        $password = $_POST['password'];
        $query = "SELECT * from user where id = '$Id' and password = '$password'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
                header('Location:adminuser.php');  
        }else{
            $em = "There is no user in that id <br>";
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
        <h1>LOGIN</h1>
        <h4><?php if(isset($em)) echo $em ;?></h4>
        <form action="" method="POST">
            <label for="Id">User Id:</label><br>
            <input type="text" name="Id" id="Id"> <br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password"><br>

            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label><br>
            <hr>
            <button type="submit" name="submit">Login</button>
            <a href="registration.php">Register</a>
        </form>
    </div>
</body>
</html>