<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題</title>
    <h2>no.5</h2>

    <form action="" method="post">
        id : <input type="text" name="id" value="<?php echo $_POST['id'];?>"><br>
        パスワード: <input type="password" name="password" value="<?php echo $_POST['password'];?>"><br>
        <input type="submit" name="submit" value='送信'>
    </form>

    <form action="input.php" method="post">
    <input type='hidden' name='id' value='<?php echo $_POST['id'];?>'>
    <input type='hidden' name='password' value='<?php echo $_POST['password'];?>'>
    <input type="submit" name="submit" value='戻る'>
    </form>
    
</head>
<body>
    
</body>
</html>