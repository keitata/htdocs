<?php
class MemberList
{
    private $file_path;

    public function __construct($file_path)
    {
        $this->file_path = $file_path;
    }

    // ブラウザにデータ表示
    public function displayMembers()
    {
        //CSVからデータを取得
        $members = $this->getMembers();

        echo '<table>';
        echo '<tr><th>ID</th><th>名前</th><th>住所</th><th>電話番号</th></tr>';

        foreach ($members as $member) {
            echo "<tr><td>{$member['id']}</td><td>{$member['name']}</td><td>{$member['address']}</td><td>{$member['phone']}</td></tr>";
        }

        echo '</table>';
    }

    // CSVからデータを取得
    private function getMembers()
    {
        $members = [];
        if (file_exists($this->file_path)) {
            $lines = file($this->file_path, FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $data = explode(',', $line);
                $member = [
                    'id' => $data[0],
                    'name' => $data[1],
                    'address' => $data[2],
                    'phone' => $data[3]
                ];
                $members[] = $member;
            }
        }
        return $members;
    }

    // POSTされたら、CSVにデータを書き込む
    public function addMember($id, $name, $address, $phone)
    {
        $new_data = "{$id},{$name},{$address},{$phone}\n";
        file_put_contents($this->file_path, $new_data, FILE_APPEND | LOCK_EX);
    }
}

// メインの処理
$file_path = './members.csv';
$memberList = new MemberList($file_path);

//POSTされたら
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    //CSVに書き込む
    $memberList->addMember($id, $name, $address, $phone);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <title>名簿作成アプリ</title>
</head>

<body>
    <h1>名簿作成アプリ</h1>
    <form method="post">
        <label>ID: <input type="text" name="id" required></label><br>
        <label>名前: <input type="text" name="name" required></label><br>
        <label>住所: <input type="text" name="address" required></label><br>
        <label>電話番号: <input type="text" name="phone" required></label><br>
        <input type="submit" value="送信">
    </form>

    <?php
    // メンバー一覧を表示
    $memberList->displayMembers();
    ?>
</body>

</html>
