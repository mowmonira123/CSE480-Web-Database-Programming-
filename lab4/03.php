<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03.</title>
</head>
<body>
    <?php
        $temparatures = array("78","60", "62", "68", "71", "68", "73", "85", "66", "64", "76", "63", "75", "76", "73", "68", "62", "73", "72", "65", "74", "62", "62", "65", "64", "68", "73", "75", "79", "73");

        $average = array_sum($temparatures) / count($temparatures);

        echo "<h1>"."Average Temparature is: ".  $average ."<h1>";

        $variance = 0.0;

        for($i = 0 ; $i < count($temparatures) ; $i++){ 

            $variance += pow(($temparatures[$i] -  $average), 2); 
        }

        $SD = $variance/count($temparatures);
          
        echo"<h1>" . "Standard Deviation is:" . sqrt($SD) . "<h1>";
        echo "<h1>"."Lowest Temperature: ".(min($temparatures))."<h1>";
        echo "<h1>"."Highest Temperature: ".(max($temparatures))."<h1>";
    ?>
</body>

</html>