<?php
if (isset($_POST['submit'])) { 
    $id = $_POST['id'];
    $password = $_POST['password'];
    setcookie("id",$id,time()+60*60*24*14);
    setcookie("password",$password,time()+60*60*24*14);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題</title>

    <h2>no.7</h2>
    <form action="" method="post">
        ID: <input type="text" name="id" value="<?php if(!empty($id)) echo $id;?>"><br>
        パスワード: <input type="password" name="password" value="<?php if(!empty($password)) echo $password;?>"><br>
        <input type="submit" name="submit" value='送信'>
        <input type="submit" name="submit" value='戻る'>

</head>
<body>
    
</body>
</html>