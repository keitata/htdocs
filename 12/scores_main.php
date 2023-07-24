<?php
include 'scores_library.php';

$english_scores = [98, 38, 89, 84, 54];
$math_scores = [92, 81, 59, 84, 34, 59];
$japanese_scores = [57, 68, 19, 74, 94];

$english_sum = calculate_sum($english_scores);
$english_average = calculate_average($english_scores);

$math_sum = calculate_sum($math_scores);
$math_average = calculate_average($math_scores);

$japanese_sum = calculate_sum($japanese_scores);
$japanese_average = calculate_average($japanese_scores);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>科目別得点</title>
</head>
<body>
    <h1>科目別得点</h1>
    <p>英語のスコア合計は<?php echo $english_sum; ?>点、平均<?php echo $english_average; ?>点です。</p>
    <p>数学のスコア合計は<?php echo $math_sum; ?>点、平均<?php echo $math_average; ?>点です。</p>
    <p>国語のスコア合計は<?php echo $japanese_sum; ?>点、平均<?php echo $japanese_average; ?>点です。</p>
</body>
</html>