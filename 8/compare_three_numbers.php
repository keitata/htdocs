<?php
// 乱数を生成して変数に代入（0から100の範囲）
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);

// 最大の値を計算
$max_value = max($a, $b, $c);

// 結果の表示
echo "a: {$a}, b: {$b}, c: {$c}";
echo "最大値: {$max_value}";
?>