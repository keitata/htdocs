<!DOCTYPE html>
<html lang="ja">
<head>
    <title>注文確認画面</title>
</head>
<body>
    <h1>注文確認画面</h1>

    <?php
    $customer_name = isset($_POST['customer_name']) ? $_POST['customer_name'] : '';
    $customer_address = isset($_POST['customer_address']) ? $_POST['customer_address'] : '';
    $customer_phone = isset($_POST['customer_phone']) ? $_POST['customer_phone'] : '';
    $product = isset($_POST['product']) ? $_POST['product'] : '';
    $receipt = isset($_POST['receipt']) ? $_POST['receipt'] : '';

  // 必須項目が未入力の場合エラーメッセージを表示
    if (empty($customer_name) || empty($customer_address) || empty($customer_phone) || empty($product)) {
    echo "<p style='color: red;'>注文者名、注文者住所、注文者電話番号、商品をすべて入力してください。</p>";
    } else {
    echo "<p>注文者名: $customer_name</p>";
    echo "<p>注文者住所: $customer_address</p>";
    echo "<p>注文者電話番号: $customer_phone</p>";
    echo "<p>商品名: $product</p>";

    // 領収書の表示
    if ($receipt === 'yes') {
        echo "<p>領収書: 要</p>";
    } else {
        echo "<p>領収書: 不要</p>";
    }

    // 注文を確定するボタン
    echo "<button>注文を確定</button>";
    // 戻るボタン
    echo "<button onclick='window.history.back()'>戻る</button>";
    }
    ?>
</body>
</html>
