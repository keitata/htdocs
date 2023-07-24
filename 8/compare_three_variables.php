<!DOCTYPE html>
<html>
<head>
    <title>最も大きい変数</title>
</head>
<body>
    <h1>最も大きい変数</h1>

    <?php
    // 0から2の範囲の乱数を生成して変数に代入
    $a = rand(0, 2);
    $b = rand(0, 2);
    $c = rand(0, 2);

    // 最大値を計算
    $max_value = max($a, $b, $c);

    // 最大値を判定して結果をエコー
    if ($a === $b && $a === $max_value) {
      echo "<p>変数\$aと\$bが最も大きい</p>";
    } elseif ($b === $c && $b === $max_value) {
      echo "<p>変数\$bと\$cが最も大きい</p>";
    } elseif ($a === $c && $a === $max_value) {
      echo "<p>変数\$aと\$cが最も大きい</p>";
    } else {
      // 変数のうち一つが最大値である場合の判定
      if ($max_value === $a) {
        echo "<p>変数\$aが最も大きい</p>";
      } elseif ($max_value === $b) {
        echo "<p>変数\$bが最も大きい</p>";
      } elseif ($max_value === $c) {
        echo "<p>変数\$cが最も大きい</p>";
      } else {
        // 3つの変数が全て同じ値の場合の判定
        echo "<p>全て同じ値です</p>";
      }
    }
    ?>
</body>
</html>