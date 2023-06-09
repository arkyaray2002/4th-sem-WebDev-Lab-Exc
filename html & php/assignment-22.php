<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paragraph editing</title>
    <style>
        table, th, td {
             border:1px solid black;
        }
    </style>
</head>
<body>

    <?php
        $country = array('Italy', 'Belgium', 'Denmark', 'Finland', 'France', 'Germany', 'Greece', 'Netherlands', 'Portugal', 'Spain');
        $capital = array('Rome', 'Brussels', 'Copenhagen', 'Helsinki', 'Paris', 'Berlin', 'Athens', 'Amsterdam', 'Lisbon', 'Madrid');

        $length = count($country);
    ?>
    <table>
        <tr>
            <th>Country Name</th>
            <th>Capital</th>
        </tr>

    <?php   for($i=0; $i<$length; $i++){    ?>
        <tr>
			<td style="text-align: center"><?php echo $country[$i]; ?></td>
			<td style="text-align: center"><?php echo $capital[$i]; ?></td>
		</tr>
        <?php   }   ?>

    </table>

    <p>After sorting, the array is =></p>
        <?php   sort($country);
            for($x = 0; $x < $length; $x++)
            {
                echo $country[$x];
                echo "<br>";
            }
        ?>
</body>
</html>