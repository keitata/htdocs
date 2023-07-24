<?php
$rand = mt_rand(1, 100);

if ($rand % 2 === 0) {
  # 入力値が偶数ならば
  $result = '偶数';
} else {
  # 入力値が偶数でないならば（奇数ならば）
  $result = '奇数';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>奇数・偶数の判定</title>
</head>
<body>
  <h1>奇数・偶数の判定</h1>
  <p>$rand: <?php echo $rand; ?></p>
  <p><?php echo $result; ?>です。</p>
</body>
</html>