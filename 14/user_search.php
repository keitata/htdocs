<?php
$users = [
  '01' => [
    'id' => '01',
    'name' => '山田太郎',
    'address' => '東京都港区',
    'phone' => '090-0000-0000',
  ],
  '02' => [
    'id' => '02',
    'name' => '佐藤花子',
    'address' => '東京都杉並区',
    'phone' => '090-2222-2222',
  ],
  '03' => [
    'id' => '03',
    'name' => '山本二郎',
    'address' => '東京都豊島区',
    'phone' => '090-3333-3333',
  ],
  '04' => [
    'id' => '04',
    'name' => '田中三郎',
    'address' => '神奈川県横浜市',
    'phone' => '090-4444-4444',
  ],
  '05' => [
    'id' => '05',
    'name' => '斎藤さくら',
    'address' => '東京都台東区',
    'phone' => '090-5555-5555',
  ],
  '06' => [
    'id' => '06',
    'name' => '加藤桃',
    'address' => '東京都世田谷区',
    'phone' => '090-6666-6666',
  ],
];

// 送信されたuser_idの受け取り
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';

// 空文字ならばメッセージ
if ($user_id === '') {
  echo "<p>ユーザーIDを入力してください。</p>";
} else {
  if (isset($users[$user_id]) === false) {
    echo "<p>user_id:{$user_id}に該当するユーザーは存在しません。</p>";
  } else {
    // 該当のユーザーが存在すればそのユーザーの詳細情報を表示
    $user = $users[$user_id];
    echo "<h2>ユーザー詳細</h2>";
    echo "<p>ユーザーID: {$user['id']}</p>";
    echo "<p>名前: {$user['name']}</p>";
    echo "<p>住所: {$user['address']}</p>";
    echo "<p>電話番号: {$user['phone']}</p>";
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>ユーザー検索</title>
</head>
<body>
  <h1>ユーザー検索</h1>
  <form method="get">
    <label>ユーザーID: <input type="number" name="user_id"></label>
    <input type="submit" value="検索">
  </form>
</body>
</html>
