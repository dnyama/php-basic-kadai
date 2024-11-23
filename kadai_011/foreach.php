<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題11</title>
</head>
<body>
  <p>
   <?php
     $food_date = ['名前' => '玉ねぎ','値段' => '200','産地' => '北海道'];

     foreach ($food_date as $key => $value) {
      echo"{$key}：{$value}<br>";
     }     
   ?>
  </p>
</body>
</html>