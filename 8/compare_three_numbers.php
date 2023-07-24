<!DOCTYPE html>
<html>
<head>
    <title>最大値の判定</title>
</head>
<body>
    <h1>最大値の判定</h1>

    <?php
    // 乱数を生成して変数に代入（0から100の範囲）
    $a = rand(0, 100);
    $b = rand(0, 100);
    $c = rand(0, 100);

    // 最大の値を計算
    $max_value = max($a, $b, $c);
    ?>

    <p>a: <?php echo $a; ?></p>
    <p>b: <?php echo $b; ?></p>
    <p>c: <?php echo $c; ?></p>
    <p>最大値: <?php echo $max_value; ?></p>
</body>
</html>
