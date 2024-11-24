<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
        // クラスを作成する
        class Food {
          // プロパティを定義
          private $name;
          private $price;
          // メソッドを定義
          public function show_price() {
            echo $this->price . '<br>';
          }
          // コンストラクタの定義
          public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }
        }
        // クラスを作成する
        class Animal {
          // プロパティを定義
          private $name;
          private $height;
          private $weight;
          // メソッドを定義
          public function show_height() {
            echo $this->height . '<br>';
          }
          // コンストラクタの定義
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
        }
      
      // インスタンスを作成し、出力する
      $tomato = new Food('トマト','250');
      print_r($tomato);
      echo '<br>';
      $cat = new Animal('猫','26','3000');
      print_r($cat);
      echo '<br>';

      // メソッドへアクセスする
      $tomato->show_price();
      $cat->show_height();

    ?>
  </p>
</body>
</html>