<?php
    session_start();
    include('db.php');
    $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $query = "SELECT * from user where id = '$id'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['password'] = $row['password'];
    }
?>

<?php
    if($row['type'] == 'admin'){
?>
    <h1>Welcome <?php echo $row['name']?>!</h1><br>
    <a href="profile.php">Profile</a><br>
    <a href="change.php">Change Password</a><br>
    <a href="user.php">View Users</a><br>
    <a href="logout.php">Logout</a>
<?php
    }
?>
<?php
    if($row['type'] == 'user'){
?>
    <h1>Welcome <?php echo $row['name']?>!</h1><br>
    <a href="profile.php">Profile</a><br>
    <a href="change.php">Change Password</a><br>
    <a href="logout.php">Logout</a>
<?php
    }
?>
</body>
</html>