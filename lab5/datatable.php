<?php
include("db1.php");
 
$sql = "SELECT * FROM user ORDER BY name ";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>IP Address</th>";
                echo "<th>URL</th>";
                echo "<th>Age</th>";
                echo "<th>Gender</th>";
                echo "<th>Mobile</th>";
                echo "<th>Comment</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['ipaddress'] . "</td>";
                echo "<td>" . $row['URL'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['mob_no'] . "</td>";
                echo "<td>" . $row['brief'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ordered by name table</title>
    <style type="text/css">
        
                th, td{
                        
                         padding: 5px;
                } 

    </style>

</head>
</html>