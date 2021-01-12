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

$list = array(
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


/* echo 'for'."\n";
for ($i = 0; $i < count($list); $i++) {
    ($value = current($list));
    echo 'ID : '.$value['id'];
    echo 'name : '.$value['name'];  
    echo '<br>';
} */

echo 'for'."\n";
for ($i = 0; $i < count($list); $i++) {
    list( $key, $value ) = each($list);
    echo 'ID : '.$value['id'];
    echo 'name : '.$value['name'];  
    echo '<br>';
}
//count()配列の数を取得
//each()配列から現在のキーと値のペアを返


$list = array(
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

//$array = Array('tokyo' => '東京', 'kyoto' => '京都', 'osaka' => '大阪');
echo 'while'."\n";
while ($value = current($list)) {
    echo 'ID:'.$value['id'].'name:'.$value['name'].'<br>';
    next($list);
}
//current()内部配列ポインタが現在指している要素の値を取得する
//next()内部ポイント処理（ひとつ進めた）後の要素の値を返します。次の要素がない場合は、falseを返す

$list = array(
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

echo 'foreach'."\n";
foreach($list as $key => $value){
    echo 'ID:'.$value['id'].'name:'.$value['name'].'<br>';
}

//連想配列
//$fruit = array("apple" => "リンゴ", "orange" => "ミカン", "grape" => "ブドウ");

//配列

//$fruit = array(0 => "リンゴ", 1 => "ミカン", 2 => "ブドウ");

//print_r($fruit['orange']);

?>
</pre>
</main>
</body>    
</html>