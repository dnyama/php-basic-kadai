<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      $scoer1 = 80;
      $scoer2 = 60;
      $scoer3 = 55;
      $scoer4 = 40;
      $scoer5 = 100;
      $scoer6 = 25;
      $scoer7 = 80;
      $scoer8 = 95;
      $scoer9 = 30;
      $scoer10 = 60;

      $total = $scoer1 + $scoer2 + $scoer3 + $scoer4 + $scoer5 + $scoer6 + $scoer7 + $scoer8 + $scoer9 + $scoer10;

      $average_score = $total / 10;  
      
      echo $average_score;
    ?>

  </p>
</body>
</html>
