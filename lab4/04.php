<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04.</title>
     <style>
        h2{
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Sorted list in descending order: </h1>
    <br>
    <?php
        $temparatures = array("78","60", "62", "68", "71", "68", "73", "85", "66", "64", "76", "63", "75", "76", "73", "68", "62", "73", "72", "65", "74", "62", "62", "65", "64", "68", "73", "75", "79", "73");

        $C = count($temparatures);

        for($i=0; $i<$C; $i++) {

            $max_i = $i;

            for($j=$i+1; $j<$C; $j++) {

                if($temparatures[$j] > $temparatures[$max_i]){
                    $max_i = $j;
                }
    }

    $temp = $temparatures[$max_i];
    $temparatures[$max_i] = $temparatures[$i];
    $temparatures[$i] = $temp;
  }

  for ($i = 0; $i < $C; $i++) {
    if($i == $C-1){
        echo "<h2>" . $temparatures[$i]; 
    }
    else{
    echo "<h2>" . $temparatures[$i]." --> "; 
    }
}  
    ?>
</body>

</html>