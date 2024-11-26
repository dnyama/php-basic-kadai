<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        // Step4.：ソート対象の配列を用意する
          // ソートする配列を宣言
          $nums = [15, 4, 18, 23, 10];

          // $array：関数内ソート対象の配列
          $array = $nums;
          // ＊関数内に入れた場合はsort_2wayの第1引数を$numsに変更、呼び出しも$numsに変更、面倒。

        // Step3.：独自のソート関数sort_2wayを作る
          // 【関数】sort_2way：第2引数($order)に指定したソート方向（昇順／降順）で、第1引数($array)の配列をソートする
          function sort_2way($array, $order) {
            // （引数）$order：ソート方向（TRUE：昇順／FALSE：降順）
            if ($order) {
                echo '昇順にソートします。<br>';
                // 【PHP標準関数】sort：昇順ソート
                sort($array);
                foreach ($array as $value) {
                  echo $value . '<br>';
                }
            } else {
                echo '降順にソートします。<br>';
                // 【PHP標準関数】rsort：降順ソート
                rsort($array);
                foreach ($array as $value) {
                  echo $value . '<br>';
                }
            }

          }
          
        // Step5.独自のソート関数sort_2wayを呼び出す
          // 昇順ソート
          sort_2way($array, true);
          // 降順ソート
          sort_2way($array, false);
        
        ?>
    </p>
</body>

</html>
