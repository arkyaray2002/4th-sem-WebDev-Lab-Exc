<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a WebPage</title>
</head>
<body>
    <p>Arkya Ray</p>

    <p><?php
        for($i=1;$i<=10;$i++)
            echo "$i ";
       ?>
    </p>

    <p> <?php  echo "Today is " . date("d-m-Y")  ?> (<?php  echo date("l");  ?>) </p>

</body>
</html>