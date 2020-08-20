
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題</title>
    <h2>no.4</h2>

    <form action="" method="get">
        id : <input type="text" name="id" value="<?php echo $_GET['id'];?>"><br>
        パスワード: <input type="password" name="password" value="<?php echo $_GET['password'];?>"><br>
        <input type="submit" name="exe" value='送信'>
    </form>

    <form action="input.php" method="get">
    <input type='hidden' name='id' value='<?php echo $_GET['id'];?>'>
    <input type='hidden' name='password' value='<?php echo $_GET['password'];?>'>
    <input type="submit" name="exe" value='戻る'>
    </form>   

</head>
<body>
    
</body>
</html>