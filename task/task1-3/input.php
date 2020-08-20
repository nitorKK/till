<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題</title>
    <h2>no.1</h2>

        <?php
        echo 'Hello World!';
        ?>

    <h2>no.2</h2>
    <form action="" method="get">
        id : <input type="text" name="id" value=""><br>
        パスワード: <input type="text" name="password" value=""><br>
        <input type="submit" name="exe" value='送信'>
    </form>

    <?php
    $id='';
    $password='';
    if(isset($_GET['exe'])){
        $id = $_GET['id'];
        $password = $_GET['password'];
        echo $id."\n";
        echo '<br>';
        echo $password;
    }

    ?>
    <h2>no.3</h2>
    <form action="" method="post">
        ID: <input type="text" name="id" value=""><br>
        パスワード: <input type="text" name="password" value=""><br>
        <input type="submit" name="submit" value='送信'>
    </form>

    <?php
        $id='';
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $password = $_POST['password'];
            echo $id."\n";
            echo '<br>';
            echo $password;

        }
    ?>
</head>
<body>

</body>
</html> 