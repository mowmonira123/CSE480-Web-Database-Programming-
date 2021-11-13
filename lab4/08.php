<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08.</title>
</head>
<body>
    <h2>Input Chess Board info :</h2>

  <form action="" method="GET">
    <h2>Input Row number :   
    <input type="number" name="inputRow" placeholder="Row"/></h2>
    <h2>Input Column number :   
    <input type="number" name="inputCol" placeholder="Column"/></h2>
    <br>
    <input type="submit" name="SubmitButton"/>
  </form> 
  <br><br><br><br>

   <table align="center" width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   
    <?php
         if(isset($_GET['SubmitButton'])) { 

            (int)$r = $_GET['inputRow'];
            (int)$c = $_GET['inputCol'];

            for($i=1 ; $i <= $r ; $i++)
            {
                echo "<tr>";
                for($j=1 ; $j<= $c ; $j++)
                {
                    $total=$i+$j;

                    if($total%2==0)
                    {
                        echo "<td height=35px width=35px bgcolor=#FFFFFF></td>";
                    }
                    else
                    {
                        echo "<td height=35px width=35px bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
          }

        }

     ?>
 </table>
</body>

</html>