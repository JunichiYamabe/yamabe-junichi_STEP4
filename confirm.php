<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$adress = $_POST['adress'] ?? '';
$question = $_POST['question'] ?? '';
$selected_gender = $_POST['gender'] ?? '';
$gender_map = [
  'male' => '男性',
  'female' => '女性',
  'other' => 'その他',
];
$gender_display = $gender_map[$selected_gender] ?? '';
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容の確認</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h1>入力内容の確認</h1>
    <p>以下の内容でよろしければ「送信する」ボタンを押してください。</p>
  </header>

  <main>
    <table class="confirm-table">
      <tr>
        <th>名前</th>
        <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>

      <tr>
        <th>年齢</th>
        <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>

      <tr>
        <th>電話番号</th>
        <td><?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>

      <tr>
        <th>メール</th>
        <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>

      <tr>
        <th>住所</th>
        <td><?php echo htmlspecialchars($adress, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>

      <tr>
        <th>質問</th>
        <td><?php echo nl2br(htmlspecialchars($question, ENT_QUOTES, 'UTF-8')); ?></td>
      </tr>

      <tr>
        <th>性別</th>
        <td><?php echo htmlspecialchars($gender_display, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>


    </table>

    <div class="button-group">
      <form action="form.php" method="get">
        <button type="submit" class="btn-back">戻る</button>
      </form>
      <form action="#" method="post">
        <button type="submit">送信</button>
      </form>
    </div>
  </main>

  <footer>
    <p>&copy; 2026 CyTech Training Page. All rights reserved.</p>
  </footer>

</body>
</html>
