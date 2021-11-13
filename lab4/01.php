<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01.</title>
</head>

<body>
	<h2>All the numbers between 2000 and 3000 that are divisible by 10 and
13 are :  </h2>
	<?php
	for ($i=2000; $i <= 3000 ; $i++) {  

		if($i % 10 == 0 && $i % 13 == 0)
		{ 
			echo "<h2>" . $i . "<h2>" ;
		}
	}
	?>
</body>
</html>