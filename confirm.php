<?php
$errors = [];
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

    if ($name === '') {
        $errors[] = '名前に入力をしてください。';
    } elseif (!preg_match('/^[a-zA-Z\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{4E00}-\x{9FFF}]+$/u', $name)) {
        $errors[] = '名前はひらがな、カタカナ、漢字、英字のみ使用できます。';
    }

    if ($age === '') {
        $errors[] = '年齢に入力をしてください。';
    } elseif ((int)$age <= 0 || (int)$age >= 150) {
        $errors[] = '年齢は0から150の間で入力してください。';
    }

    if ($phone === '') {
        $errors[] = '電話番号に入力をしてください。';
    } elseif (!preg_match('/^[0-9-]+$/', $phone)) {
        $errors[] = '電話番号は半角数字とハイフンのみ使用できます。';
    }

    if ($email === '') {
        $errors[] = 'メールに入力をしてください。';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'メールアドレスの形式が正しくありません。';
    }

    if ($adress === '') {
        $errors[] = '住所に入力をしてください。';
    } elseif (!preg_match('/^[a-zA-Z0-9\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{4E00}-\x{9FFF}-]+$/u', $adress)) {
        $errors[] = '住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。';
    }

    if ($question === '') {
        $errors[] = '質問に入力をしてください。';
    }

    if ($gender_display === '') {
        $errors[] = '性別を選択してください。';
    }  

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

    <?php if (!empty($errors)): ?>
      <div class="error-box">
        <h2>入力内容に不備があります</h2>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
          <?php endforeach; ?>
        </ul>
        <form action="form.php" method="get">
          <button type="submit" class="btn-back">入力画面に戻る</button>
        </form>
      </div>

    <?php else: ?>
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
    <?php endif; ?>
  </main>

  <footer>
    <p>&copy; 2026 CyTech Training Page. All rights reserved.</p>
  </footer>

</body>
</html>
