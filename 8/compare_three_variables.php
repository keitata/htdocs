<?php
// 0から2の範囲の乱数を生成して変数に代入
$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);

echo "a: {$a}, b: {$b}, c: {$c}";

// 最大値を計算
$max_value = max($a, $b, $c);

// 変数のうち2つが同じ値で最大である場合の判定
if ($a === $b && $a === $max_value) {
  echo "変数\$aと\$bが最も大きい";
} elseif ($b === $c && $b === $max_value) {
  echo "変数\$bと\$cが最も大きい";
} elseif ($a === $c && $a === $max_value) {
  echo "変数\$aと\$cが最も大きい";
} else {
  // 変数のうち一つが最大値である場合の判定
  if ($max_value === $a) {
    echo "変数\$aが最も大きい";
  } elseif ($max_value === $b) {
    echo "変数\$bが最も大きい";
  } elseif ($max_value === $c) {
    echo "変数\$cが最も大きい";
  } else {
    // 3つの変数が全て同じ値の場合の判定
    echo "全て同じ値です";
  }
}
?>
