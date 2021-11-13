<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02.</title>
     <style>
        h1{
            display: inline;
        }
    </style>
</head>
<body>
    <?php
    for ($i=1; $i <= 10 ; $i++) {  

      for($j=1 ; $j<=$i ; $j++)
      {
        if($i > 5)
        {
            static $x = 5;
            static $m = 2;

            for($k=1 ; $k<=$x ; $k++)
            {
                echo "<h1>" . "*" . "<h1>";
            }

            echo "<br/>";

            $x--;

            for($l=1 ; $l<=$m ; $l++)
            {
                echo '&nbsp;';
            }
            $m+=2;

        }

        else{
            {
                echo "<h1>" . "*" . "<h1>";
            }
        }

      }
      echo "<br/>";
    }
    ?>
</body>
</html>