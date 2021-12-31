<?php
    session_start();
    include('db.php');
    $id = $_SESSION['id'];
    $password = $_SESSION['password'];
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


    <table style="border: 1px solid black;">
        <tr>
            <th style="text-align: center;">Users</th> 
        </tr>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>USER TYPE</th>
        </tr>
    <?php
        $query = "SELECT * from user";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr> 
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['type']?></td>
        </tr>
    <?php
        }}else{
            echo "NO DATA";
        }
    ?>
        <tr>
            <td style="text-align: right;"><a href="adminuser.php">Go Home</a></td>
        </tr>
    </table>
</body>
</html>