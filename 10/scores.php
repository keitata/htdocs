<!DOCTYPE html>
<html>
<head>
    <title>スコア合計と平均値の算出</title>
</head>
<body>
    <h1>スコア合計と平均値の算出</h1>

    <?php
    $english_scores = [765, 820, 440, 530, 900, 960, 735];

    // スコアの平均値を求める
    $total = array_sum($english_scores);
    $average_score = $total / count($english_scores);
    $average_score = round($average_score, 2);
    echo "<p>スコアの合計は {$total} です。</p>";
    echo "<p>スコアの平均値は {$average_score} です。</p>";

    // 3つの値を追加
    $english_scores[] = 620;
    $english_scores[] = 555;
    $english_scores[] = 590;

    // 新しいスコアの平均値を求める
    $total = array_sum($english_scores);
    $new_average_score = $total / count($english_scores);
    $new_average_score = round($new_average_score, 2);
    echo "<p>スコアの合計は {$total} です。</p>";
    echo "<p>スコア平均値（追加含む） {$new_average_score} です。</p>";
    ?>
</body>
</html>
