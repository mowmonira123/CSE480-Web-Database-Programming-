<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06.</title>
</head>
<body>
    <h3>Enter a string :</h3>

  <form action="" method="GET">
    <input type="string" name="inputstring" />
    <br>
    <input type="submit" name="SubmitButton"/>
  </form> 
    <?php

        function Palindrome($s){ 
            if (strrev($s) == $s){ 
                return 1; 
            }
            else{
                return 0;
            }
        } 


        if(isset($_GET['SubmitButton'])) { 

        $s = $_GET['inputstring'];

        if(Palindrome($s)){ 
            echo "<h2>" . "Palindrome"; 
        }
        else { 
            echo "<h2>" . "Not a Palindrome"; 
        }
    }

     ?>
</body>

</html>