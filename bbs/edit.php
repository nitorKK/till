<?php
$user = "root";//データベース ユーザ名
$pass = "";//接続パスワード
$dnsinfo = "mysql:dbname=till;host=local.till;charset=utf8";

if(isset($_POST['submit'])){
    try{
        $pdo = new PDO($dnsinfo,$user,$pass);
        $sql = "UPDATE bbs SET name=? ,contents=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $array = array($_POST["name"],$_POST["contents"],$_POST["id"]);
        $stmt->execute($array);
        //$res = $stmt->execute(array('aテスト','bテスト',9));//更新テスト
    }catch(Exception $e){
        echo "接続失敗:".$e->getMessage();
    }
}

if(isset($_POST["update"])){
    try{
     $pdo = new PDO($dnsinfo,$user,$pass);
     $sql = "SELECT * FROM bbs WHERE id=?";
     $stmt = $pdo->prepare($sql);
     $array = array($_POST["id"]);
     $stmt->execute($array);
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     $id = $row["id"];
     $name = $row["name"];
     $contents = $row["contents"];
    }catch(Exception $e){
    echo "接続失敗:".$e->getMessage();
  }
}

if(!empty($_POST['delete']) ) {
    try{
        $pdo = new PDO($dnsinfo,$user,$pass);
        $sql = "DELETE FROM bbs WHERE id=?";
        $stmt = $pdo->prepare($sql);//sql実行の準備（引数に$pdoを指定）（PDOクラスのprepareメソッドを実行するとPDOStatementインスタンスが生成
        $array = array($_POST['id']);
        $stmt->execute($array);//生成されたPDOStatementメソッドでsql実行
        //$array = array($_POST['id']);
        //$stmt->execute(array(1));削除テスト
    }catch(Exception $e){
        echo "接続失敗:".$e->getMessage();
    }
    }

    $pdo = new PDO($dnsinfo,$user,$pass);
    $sql = "SELECT * FROM bbs";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $res ="";
    //データがある分だけ繰りかえす
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $res .= "<div>番号" .$row["id"] ."<br>"."名前：".$row["name"] ."<br>"."投稿内容：".$row["contents"]."<br>"."時間：".$row["created_at"]
        ."</div>"."\n";
        
       $res .= <<<eof
        <form action="" method="post">
        <input type='hidden' name='id' value='{$row['id']}'>
        <input type="submit" name="delete" value='削除'>
        </form>
        eof;
        //ヒアドキュメントで削除コード追加

        $res .= <<<eof
        <form action="" method="post">
        <input type='hidden' name='id' value='{$row['id']}'>
        <input type="submit" name="update" value='更新'>
        </form>
        eof;
        //ヒアドキュメントで更新コード追加
    }
?>


<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理</title>
</head>
<body>
<section>
    <h2>管理ページ</h2>
    <?php
    if(isset($_POST['update'])){
    ?>

    <form action="" method="post">
    <input type="hidden" name="id" size='10' value="<?php echo $id;?>">
        名前 : <input type="text" name="name" value="<?php echo $name;?>"><br>
        投稿内容: <input type="text" name="contents" value="<?php echo $contents;?>"><br>
        <input type="submit" name="submit" value='更新'>
    </form>

    <?php
    }
    ?>

    <a href="index.php">戻る</a>    
    <?php echo $res;
    //PHPで全件出力
    ?>
    
</section>
</body>
</html>
