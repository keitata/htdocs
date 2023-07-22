<?php
# 変数sumに0を代入
$sum = 0;

# 変数numberに1を代入
$number = 1;

# numberが100を超えるまで繰り返し
while ($number <= 100) {

    # numberが奇数であれば
    if ($number % 2 !== 0) {
    # sumにnumberを加算
    $sum += $number;
    }

    # numberに1を加算
    $number++;
}

# 合計値を出力
echo "1から100までの奇数の合計値は{$sum}です。";
?>