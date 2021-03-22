<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php

$nameList = array(
    array(
        'id'=>1,
        'name'=>'a'
    ),
    array(
        'id'=>2,
        'name'=>'b'
    ),
    array(
        'id'=>3,
        'name'=>'c'
    ),
    array(
        'id'=>4,
        'name'=>'d'
    )
);
$mailList = array(
    array(
        'mail_id'=>1,
        'id'=>3,
        'mail'=> 'c1@mail.com'
    ),
    array(
        'mail_id'=>2,
        'id'=>1,
        'mail'=>'a1@mail.com'
    ),
    array(
        'mail_id'=>3,
        'id'=>4,
        'mail'=> 'd1@mail.com'
    ),
    array(
        'mail_id'=>4,
        'id'=>2,
        'mail'=> 'b1@mail.com'
    ),
    array(
        'mail_id'=>5,
        'id'=>1,
        'mail'=> 'a2@mail.com'
    ),
    array(
        'mail_id'=>6,
        'id'=>2,
        'mail'=> 'b2@mail.com'
    ),
    array(
        'mail_id'=>7,
        'id'=>3,
        'mail'=> 'c2@mail.com'
    ),
    array(
        'mail_id'=>8,
        'id'=>4,
        'mail'=> 'd2@mail.com'
    ),
);


/* echo 'for'."\n";
for ($i = 0; $i < count($list); $i++) {
    ($value = current($list));
    echo 'ID : '.$value['id'];
    echo 'name : '.$value['name'];  
    echo '<br>';
} */

echo 'for(後で)'."\n";
/* for ($i = 0; $i < count($list); $i++) {
    list( $key, $value ) = each($list);
    echo 'ID : '.$value['id'];
    echo 'name : '.$value['name'];  
    echo '<br>';
} */
//count()配列の数を取得
//each()配列から現在のキーと値のペアを返


$nameList = array(
    array(
        'id'=>1,
        'name'=>'a'
    ),
    array(
        'id'=>2,
        'name'=>'b'
    ),
    array(
        'id'=>3,
        'name'=>'c'
    ),
    array(
        'id'=>4,
        'name'=>'d'
    )
);
$mailList = array(
    array(
        'mail_id'=>1,
        'id'=>3,
        'mail'=> 'c1@mail.com'
    ),
    array(
        'mail_id'=>2,
        'id'=>1,
        'mail'=>'a1@mail.com'
    ),
    array(
        'mail_id'=>3,
        'id'=>4,
        'mail'=> 'd1@mail.com'
    ),
    array(
        'mail_id'=>4,
        'id'=>2,
        'mail'=> 'b1@mail.com'
    ),
    array(
        'mail_id'=>5,
        'id'=>1,
        'mail'=> 'a2@mail.com'
    ),
    array(
        'mail_id'=>6,
        'id'=>2,
        'mail'=> 'b2@mail.com'
    ),
    array(
        'mail_id'=>7,
        'id'=>3,
        'mail'=> 'c2@mail.com'
    ),
    array(
        'mail_id'=>8,
        'id'=>4,
        'mail'=> 'd2@mail.com'
    ),
);

//$array = Array('tokyo' => '東京', 'kyoto' => '京都', 'osaka' => '大阪');
echo 'while(後で)'."\n";
/* while ($value = current($list)) {
    echo 'ID:'.$value['id'].'name:'.$value['name'].'<br>';
    next($list);
} */
//current()内部配列ポインタが現在指している要素の値を取得する
//next()内部ポイント処理（ひとつ進めた）後の要素の値を返します。次の要素がない場合は、falseを返す

$nameList = array(
    array(
        'id'=>1,
        'name'=>'a'
    ),
    array(
        'id'=>2,
        'name'=>'b'
    ),
    array(
        'id'=>3,
        'name'=>'c'
    ),
    array(
        'id'=>4,
        'name'=>'d'
    )
);
$mailList = array(
    array(
        'mail_id'=>1,
        'id'=>3,
        'mail'=> 'c1@mail.com'
    ),
    array(
        'mail_id'=>2,
        'id'=>1,
        'mail'=>'a1@mail.com'
    ),
    array(
        'mail_id'=>3,
        'id'=>4,
        'mail'=> 'd1@mail.com'
    ),
    array(
        'mail_id'=>4,
        'id'=>2,
        'mail'=> 'b1@mail.com'
    ),
    array(
        'mail_id'=>5,
        'id'=>1,
        'mail'=> 'a2@mail.com'
    ),
    array(
        'mail_id'=>6,
        'id'=>2,
        'mail'=> 'b2@mail.com'
    ),
    array(
        'mail_id'=>7,
        'id'=>3,
        'mail'=> 'c2@mail.com'
    ),
    array(
        'mail_id'=>8,
        'id'=>4,
        'mail'=> 'd2@mail.com'
    ),
);

echo 'foreach'."\n";
foreach ($mailList as $valueA ) {
    foreach ( $valueA as $varKeyB => $varValueB ) {
        echo '<p>';
        echo $varKeyB . ': ' . $varValueB;
        echo '</p>';
    }
}


?>
</pre>
</main>
</body>    
</html>