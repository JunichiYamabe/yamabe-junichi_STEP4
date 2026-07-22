<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header>
    <h1>入力フォーム</h1>
  </header>

  <main>
    <form action="confirm.php" method="post">

      <div class="form-group">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="age">年齢：</label>
        <input type="text" id="age" name="age" required>
      </div>

      <div class="form-group">
        <label for="tel">電話番号：</label>
        <input type="telephone" id="tel" name="tel" required>
      </div>

      <div class="form-group">
        <label for="email">メール：</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="adress">住所：</label>
        <input type="text" id="adress" name="adress" required>
      </div>

      <div class="form-group">
        <label for="question">質問：</label>
        <input type="text" id="question" name="question" rows="1" required></textarea>
      </div>

      <div class="form-group">
        <label for="gender">性別：</label>
        <select id="gender" name="gender">
          <option value="">選択してください</option>
          <option value="male">男性</option>
          <option value="female">女性</option>
          <option value="other">その他</option>
        </select>
      </div>



      <button type="submit">送信</button>

    </form>
  </main>

  <footer>
    <p>&copy; 2026 CyTech Training Page. All rights reserved.</p>
  </footer>

</body>
</html>
