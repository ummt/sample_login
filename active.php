<?php
session_start();

//ログインチェック
if (!isset($_SESSION['loginId']))
{
  header("Location: index.php");
}

//ログアウト処理
if (isset($_POST['logout']))
{
  session_destroy();
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログインサンプル</title>
</head>
<body>
ログインされました
<form method="post" action="active.php">
  <input type="submit" name="logout" value="ログアウト">
</form>
</body>
</html>