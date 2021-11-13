<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07.</title>
</head>
<body>
    <?php
        function pass_generator($x)
        {
            $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
            '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

            return substr(str_shuffle($data), 0,$x);
        }

        echo "<h1>"."Generated Password :".'&nbsp;'.'&nbsp;'.'&nbsp;'. pass_generator(10)."<h1>";

    ?>
</body>

</html>