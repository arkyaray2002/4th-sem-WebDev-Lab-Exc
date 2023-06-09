<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Average Calculation</title>
</head>

<body>
    <?php
        $temp = array(28, 42, 36, 63, 45, 35, 63, 58, 26, 16);

        $length = count($temp);

        $sum = array_sum($temp);

        $avg = $sum / $length;
    ?>
    <p>The Array is = <?php    print_r($temp);; ?></p>
    <p>Average of the Array is = <?php  echo $avg;  ?><sup>o</sup>C</p>
    
    <p>Smallest Element in the Array is = <?php	echo min($temp);  ?><sup>o</sup>C</p>
    <p>Largest Element in the Array is = <?php  echo max($temp);  ?><sup>o</sup>C</p>
</body>
</html>