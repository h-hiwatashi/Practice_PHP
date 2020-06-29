<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Test</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
        
        <?php
        echo '<pre>';
        var_dump($_SESSION);
        echo '<pre>';
        ?>
        
      </ul>
    </div>
  </div>

  <div class="main">
    <?php if($_POST[$csrf] === $_SESSION['csrfToken']): ?>
    <div class="thanks-message">送信が完了しました。</div>
    <?php unset($_SESSION['csrfToken']); ?>
    <?php endif; ?>
  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>

  </div>
</body>
</html>