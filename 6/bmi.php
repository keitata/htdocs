<?php
if (isset($argv[1]) && isset($argv[2])) {
    $height_cm = (float) $argv[1];
    $weight_kg = (float) $argv[2];

    // 身長をメートル単位に変換
    $height_m = $height_cm / 100;

    // BMIの計算
    $bmi = round($weight_kg / ($height_m * $height_m), 3);
} else {
    $bmi = "エラー：身長と体重をコマンド引数として指定してください";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>BMI計算結果</title>
</head>
<body>
    <h1>BMI計算結果</h1>
    <p><?php echo "{$height_cm}センチ、{$weight_kg}キログラムのあなたのBMIは{$bmi}です。"; ?></p>
</body>
</html>