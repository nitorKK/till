<?php
session_start();
if (isset($_POST['submit'])) { 
    $_session['id'] = $_POST['id'];
    $_session['password'] = $_POST['password'];
}

//session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題</title>

    <h2>no.6</h2>
    <form action="" method="post">
        ID: <input type="text" name="id" value="<?php if(!empty($_session['id'])) echo $_session['id'];?>"><br>
        パスワード: <input type="password" name="password" value="<?php if(!empty($_session['password'])) echo $_session['password'];?>"><br>
        <input type="submit" name="submit" value='送信'>
    </form>

    <form action="" method="post">
    <input type="submit" name="submit" value='戻る'>
    <?php
          echo $_session["id"];
          echo $_session["password"];

          session_start();xA
    ?>
    </form>
</head>
<body>
    
</body>
</html>