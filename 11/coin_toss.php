<!DOCTYPE html>
<html>
<head>
    <title>コイントス</title>
    <style>
        .coin_H {
            color: red;
        }
        .coin_T {
            color: blue;
        }
    </style>
</head>
<body>
    <h1>コイントス</h1>
    <?php
    $count = 100; // コイントスの回数

    // 表・裏のカウンターを初期化
    $heads_count = 0;
    $tails_count = 0;

    // コイントスの結果を格納する配列
    $results = array();

    // コイントスのシミュレーション
    for ($i = 0; $i < $count; $i++) {
        $toss_result = mt_rand(0, 1); // 0が表(H)、1が裏(T)とする

        if ($toss_result === 0) {
            // 表が出た場合
            $results[] = 'H';
            $heads_count++;
        } else {
            // 裏が出た場合
            $results[] = 'T';
            $tails_count++;
        }
    }

    // コイントス結果の出力
    echo '<p>コイン投げの回数: ' . $count . ' 回</p>';
    echo '<p>';
    foreach ($results as $result) {
        if ($result === 'H') {
            echo '<span class="coin_H">H</span> ';
        } else {
            echo '<span class="coin_T">T</span> ';
        }
    }
    echo '</p>';
    echo '<p>表が出た回数: ' . $heads_count . ' 回</p>';
    echo '<p>裏が出た回数: ' . $tails_count . ' 回</p>';
    ?>
</body>
</html>
