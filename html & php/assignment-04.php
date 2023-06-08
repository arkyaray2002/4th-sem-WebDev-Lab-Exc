<!DOCTYPE html>
<html>
<head>
  <title>Squares of Numbers</title>
  <style>
    h1{
        font-family: comic sans ms;
    }
  </style>
</head>
<body>
  <h1>Squares of Numbers 1 to 20</h1>
  <ul>
    <!-- Loop through the numbers 1 to 20 -->
    <?php for ($i = 1; $i <= 20; $i++) { ?>
      <li><?php echo $i; ?><sup>2</sup> = <?php echo pow($i, 2); ?></li>
    <?php } ?>
  </ul>
</body>
</html>
