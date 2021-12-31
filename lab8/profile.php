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
    <style type="text/css">
        
                th,td{
                         border: 0.5px solid black;
                         padding: 4px;
                } 

    </style>

  
</head>
<body>

<?php
    $query = "SELECT * from user where id = '$id'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
?>
    <table style=" border: 0.5px solid black;">
        <tr style="text-align: center;">
            <td colspan="2">Profile</td>  
        </tr>
        <tr>
            <td>ID</td>
            <td><?php echo $row['id']?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $row['name']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $row['email']?></td>
        </tr>
        <tr>
            <td>User Type</td>
            <td><?php echo $row['type']?></td>
        </tr>
        <?php
            }else{
                echo "no user";
            }
        ?>
        <tr style="text-align: right;">
            <td colspan="2"><a href="adminuser.php">Go Home</a></td>
        </tr>
    </table>
</body>
</html>