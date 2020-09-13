<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");
 
$subject = "XAMPPから送信テスト";     // 題名
$body = "これはテストメールです。\n"; // 本文
$to = 'nitor.kk.black@gmail.com';          // 送信先
 
$result = mb_send_mail($to, $subject, $body);
 
if ($result){
    echo '成功';
}
else {
    echo '失敗';
}
//mb_send_mail(送信先,タイトル,本文,追加ヘッダ,追加コマンドラインパラメータ)
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メール</title>
</head>
<h1>メール</h1>
<form action="" method="post">
      <p>送信先</p>
      <input type="text" name="to">
      <p>メールのタイトル</p>
      <input type="text" name="title">
      <p>本文</p>
      <textarea name="content"></textarea>
      <p><input type="submit" name="submit" value="送信"></p>
    </form>

<body>
    
</body>
</html>