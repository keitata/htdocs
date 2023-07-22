<?php

$height_cm = 170; 
$weight_kg = 60;  

// BMIの計算
$height_m = $height_cm / 100; // cmをmに変換
$bmi = round($weight_kg / ($height_m * $height_m), 2); 

// 結果の表示
echo "{$height_cm}センチ、{$weight_kg}キログラムのあなたのBMIは{$bmi}です。";
?>