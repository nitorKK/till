<?php
var_dump($_GET);
var_dump($_POST);
//POSTが空じゃない場合のみ、入力値をvalueにセット
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題</title>
    <h2>no.4</h2>


    <form action="confirm04.php" method="get">
        id : <input type="text" name="id" value="<?php if(!empty($_GET['id'])) echo $_GET['id'];?>"><br>
        パスワード: <input type="password" name="password" value="<?php if(!empty($_GET['password'])) echo $_GET['password'];?>"><br>
        <input type="submit" name="exe" value='送信'>
    </form>

    <h2>no.5</h2>
    <form action="confirm05.php" method="post">
        ID: <input type="text" name="id" value="<?php if(!empty($_POST['id'])) echo $_POST['id'];?>"><br>
        パスワード: <input type="password" name="password" value="<?php if(!empty($_POST['password'])) echo $_POST['password'];?>"><br>
        <input type="submit" name="submit" value='送信'>
    </form>

</head>
<body>
    
</body>
</html>