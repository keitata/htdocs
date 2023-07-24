<!DOCTYPE html>
<html lang="ja">
<head>
    <title>じゃんけんゲーム</title>
</head>
<body>
    <h1>じゃんけんゲーム</h1>
    <form method="post">
    <label><input type="radio" name="user_hand" value="グー"> グー</label>
    <label><input type="radio" name="user_hand" value="チョキ"> チョキ</label>
    <label><input type="radio" name="user_hand" value="パー"> パー</label>
    <input type="submit" value="勝負!!">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hands = ["グー", "チョキ", "パー"];
    $user_hand = $_POST['user_hand'];
    $computer_hand = $hands[rand(0, 2)];

    
    echo "<p>自分: {$user_hand}</p>";
    echo "<p>相手: {$computer_hand}</p>";

    // じゃんけんの勝敗を判定
    if ($user_hand === $computer_hand) {
        echo "<p>結果:引き分け</p>";
    } elseif (
        ($user_hand === "グー" && $computer_hand === "チョキ") ||
        ($user_hand === "チョキ" && $computer_hand === "パー") ||
        ($user_hand === "パー" && $computer_hand === "グー")
    ) {
        echo "<p>結果:勝ち</p>";
    } else {
        echo "<p>結果:負け</p>";
    }
    }
    ?>
</body>
</html>
