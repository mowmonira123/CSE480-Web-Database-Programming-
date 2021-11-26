<?php
include("db1.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style type="text/css">
		table{
                border: 1px solid black;
                }
                th, td{
                         border: 1px solid black;
                         padding: 4px;
                } 

	</style>

</head>
<body>
	<form  method="POST">
                   
                        
		<P>Enter Full Name to See the Data:</p>
		<input type="text" name="name">

		<input type="submit" value="submit" name="submit">
	</form>


<?php

	if(isset($_POST['submit'])){
                $name=$_POST['name'];
      
                $sql=   "select * 
                        from user 
                        where '$name'=user.name;";

                $res=mysqli_query($conn,$sql);

                if(!$res){
        	        echo "failed ...!!!!";
                }

	        else {

                        while($row = mysqli_fetch_assoc($res)){

                                echo "<table class='aaa'>";
                                echo " <tr> ";
                                echo "<th> Name";  echo "</th> ";
                                echo "<th> Email";  echo "</th> ";
                                echo "<th>IP Address ";  echo "</th> ";
                                echo "<th> URL";  echo "</th> ";
                                echo "<th> Age";  echo "</th> ";
                                echo "<th>Gender ";  echo "</th> ";
                                echo "<th>Mobile No ";  echo "</th> ";
                                echo "<th>BriefInfo ";  echo "</th> ";
                                echo"</tr> ";

                
                                echo "<tr>";
                                echo "<td>";
                                echo $row['name'];
                                echo "</td>";            
                                
                
                                echo "<td>";
                                echo $row['email'];
                                echo "</td>";
                        
        
                        
                                echo "<td>";
                                echo $row['ipaddress'];
                                echo "</td>";
                
                
                                echo "<td>";
                                echo $row['URL'];
                                echo "</td>";
                                
                
                                echo "<td>";
                                echo $row['age'];
                                echo "</td>";
                        
                
                                echo "<td>";
                                echo $row['gender'];
                                echo "</td>";
                                
                
                                echo "<td>";
                                echo $row['mob_no'];
                                echo "</td>";
                        
                
                                echo "<td>";
                                echo $row['brief'];
                                echo "</td>";
                                echo"</tr> ";



                                echo "</table>";
                        

                        }

	        }
	}


?>

</body>
</html>