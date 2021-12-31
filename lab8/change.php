<?php
    session_start();
    include('db.php');
    $id = $_SESSION['id'];
    $password = $_SESSION['password'];
?>

<?php
    if(isset($_POST['submit'])){
        $current = $_POST['current'];
        $new = $_POST['new'];
        $retype = $_POST['retype'];
        $test = 0;

        if(!($current == $password)){
            $ec = "invalid current password <br>";
            $test = 1;
        }
        if(!($retype == $new)){
            $en = "password does not matched <br>";
            $test = 1;
        }
        if(!(preg_match("/^([a-zA-Z0-9]){8,}$/",$new))){
            $em = "Password must be atleast 8 letters (special character not allowed) <br>";
            $test = 1;
        }
        
        if($test === 0){
            $query = "UPDATE user set password = '$new' where id = '$id'";
            $result = mysqli_query($con,$query);
            if($result){
                header('Location:adminuser.php');
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
        <h1>Change Password</h1>
        <form action="">
            <label for="current">Current Password:</label><br>
            <input type="password" name="current" id="current"> <br>
            <h4><?php if(isset($ei)) echo $ei ?></h4>

            <label for="new">New Password:</label><br>
            <input type="password" name="new" id="new"><br>
            <h4><?php if(isset($ep)) echo $ep ?></h4>

            <label for="retype">Retype New Password: </label><br>
            <input type="password" name="retype" id="retype"><br>
            <h4><?php if(isset($ep)) echo $ep ?></h4>

            <button type="submit" name="submit">Change</button>
            <a href="adminuser.php">Home</a>
        </form>
    </div>
</body>
</html>