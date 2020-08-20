<?php

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}    

$user = "root";//データベース ユーザ名
$pass = "";//接続パスワード
$dnsinfo = "mysql:dbname=till;host=local.till;charset=utf8";

$id = "";
$errorMessage = array();

if(isset($_POST['submit']) ) {

    $name = $_POST["name"];
    $contents = $_POST["contents"];
    if(empty($_POST['name']) ) {
        $errorMessage[] = "名前を入力してください";
    }
    if(empty($_POST['contents']) ) {
        $errorMessage[] = "投稿内容を入力してください";
    }

    if(!$errorMessage){
    date_default_timezone_set('Asia/Tokyo');//Asia/Tokyoでタイムゾーンを取得しないと「UTC」になる
    //echo date('Y年m月d日H時i分s秒');
    //echo date_default_timezone_get();
    $created_at = date("Y-m-d H:i:s");//date関数を$created_at代入

//通常処理をtry内に、エラー対応処理をcatchに
try{
    $pdo = new PDO($dnsinfo,$user,$pass);
    $sql = "INSERT INTO bbs (id, name, contents, created_at) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);//sql実行の準備（引数に$pdoを指定）（PDOクラスのprepareメソッドを実行するとPDOStatementインスタンスが生成
    $array = array($id,$name,$contents,"$created_at");
    $stmt->execute($array);//生成されたPDOStatementメソッドでsql実行
}catch(Exception $e){
    echo "接続失敗:".$e->getMessage();
}
}  
}

    $pdo = new PDO($dnsinfo,$user,$pass);
    $sql = "SELECT * FROM bbs";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $res ="";
    //fetchメソッドでレコードを1行ずつ上から順番にとる。
    //id、name、contents、created_atの値がワンセットで入っている。
    //$row=(id、name、contents、created_at),番号1の値は$row["id"] で取得できる。
    //データがある分だけ繰りかえす
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $res .= "<div>番号" .$row["id"] ."<br>"."名前：".$row["name"] ."<br>"."投稿内容：".$row["contents"]."<br>"."時間：".$row["created_at"]
        ."</div>"."\n";
        } 


var_dump($_POST); 
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
<!--$errorMessageに配列として保存されたエラーメッセージを出力するためにforeach文で書き出し-->
<div id="error"><?php foreach($errorMessage as $error){echo $error.'<br>';}?></div>
<section>
    <h2>新規投稿</h2>
    <form action="index.php" method="post">
        名前 : <input type="text" name="name" value=""><br>
        投稿内容: <input type="text" name="contents" value=""><br>
        <button name="submit" type="submit">投稿</button>
    </form>
    <a href="edit.php">管理画面</a>
</section>

<section>
	<h2>投稿内容一覧</h2>
    <?php echo $res;?>
	
</section>
</body>
</html>