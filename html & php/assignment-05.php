<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alphabatize an array</title>
    <style>
        body{
            font-family: comic sans ms;
        }
    </style>
</head>

<body>
    <?php
        $name = array('Arkya', 'Sohom', 'Sayantani', 'Barsha', 'Sayani', 'Sudeshna', 'Ankita', 'Oindrila');

        $length = count($name);
    ?>

    <h2>The Array is = </h2>

         <?php   
            for($i=0; $i<$length; $i++) {      ?>
        <p><?php  echo $name[$i];  ?></p>
        <?php   } ?>
        
<br>

    <h2>After alphabatically sorting, the Array be = </h2>

        <?php   
            sort($name);
            for($i=0; $i<$length; $i++) {      ?>
        <p><?php  echo $name[$i];  ?><sub><?php    echo ($i+1);  ?></sub></p>
        <?php   } ?>

</body>
</html>