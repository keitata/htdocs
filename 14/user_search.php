<?php
// var_dump($_SERVER);
$request_method = $_SERVER['REQUEST_METHOD'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>スーパーグローバル変数</title>
</head>
<body>
  <h1>スーパーグローバル変数</h1>
  <p>
    $_SERVER['REQUEST_METHOD']の値:
    <?php echo $request_method; ?>
  </p>
  <form>
    <p>
      リクエストメソッド:GET で値を送信する
      <input type="submit" value="getで送信">
    </p>
  </form>
  <form method="post">
    <p>
      リクエストメソッド:POST で値を送信する
      <input type="submit" value="postで送信">
    </p>
  </form>
</body>
</html>