<!DOCTYPE html>
<html lang="ja">
<head>
    <title>注文フォーム</title>
</head>
<body>
    <h1>注文フォーム</h1>
    <form method="post" action="order_confirm.php">
    <label>注文者名: <input type="text" name="customer_name" required></label><br>
    <label>注文者住所: <input type="text" name="customer_address" required></label><br>
    <label>注文者電話番号: <input type="text" name="customer_phone" required></label><br>

    <p>購入を希望する商品:</p>
    <label><input type="radio" name="product" value="A"> 単品</label><br>
    <label><input type="radio" name="product" value="B"> 3個入り</label><br>
    <label><input type="radio" name="product" value="C"> 10個入り</label><br>

    <label><input type="checkbox" name="receipt" value="yes"> 紙の領収書を希望する</label><br>

    <input type="submit" value="注文内容を送信">
    </form>
</body>
</html>
