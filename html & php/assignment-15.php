<!DOCTYPE html>
<html>
<head>
  <title>Jump Page Example</title>
  <style>
    #top-link {
      position: fixed;
      top: 10px;
      right: 10px;
    }

    #bottom-link {
      position: fixed;
      bottom: 10px;
      right: 10px;
    }
  </style>
</head>
<body>
  <a id="top-link" href="#bottom">Jump to Bottom</a>

  <!-- Content here -->

  <p><?php
    for($i=1;$i<=100;$i++)
        echo "$i <br>";
   ?>
</p>

  <!-- Place a link to jump back to the top -->
  <a id="bottom" href="#top">Jump to Top</a>
</body>
</html>