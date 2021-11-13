<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05.</title>
     <style>
        h1{
            display: inline;
        }
    </style>
</head>
<body>
    <?php
        $a=1;
        for($i =0 ; $i < 5 ; $i++)
        {
            if($a == 9)
            {
                echo "<h1>" . $a ."-" .($a+1) ;
            }

            else{
            echo "<h1>" . $a ."-" . ($a+1) . "_";
            $a += 2;
            }  
        }
     ?>
</body>

</html>