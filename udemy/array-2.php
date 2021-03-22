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
		'name'=>'a',
		'mail'=> array('a1@mail.com','a2@mail.com')
	),
	array(
		'id'=>2,
		'name'=>'b',
		'mail'=> array('b1@mail.com','b2@mail.com')
	),
	array(
		'id'=>3,
		'name'=>'c',
		'mail'=> array('c1@mail.com','c2@mail.com')
	),
	array(
		'id'=>4,
		'name'=>'d',
		'mail'=> array('d1@mail.com','d2@mail.com')
	)
);

/* echo 'for'."\n";
for ($i = 0; $i < count($list); $i++) {
    ($value = current($list));
    echo 'ID : '.$value['id'];
	echo 'name : '.$value['name'];
	echo 'mail : '.$value['mail'][0];
	echo 'mail2 : '.$value['mail'][1];
    echo '<br>';
} */

echo 'for'."\n";
for ($i = 0; $i < count($list); $i++) {
    list($key,$value) = each($list);
    echo 'ID : '.$value['id'];
	echo 'name : '.$value['name'];
	echo 'mail : '.$value['mail'][0];
	echo 'mail2 : '.$value['mail'][1];
    echo '<br>';
}
//count()配列の数を取得
//each()配列から現在のキーと値のペアを返


$list = array(
	array(
		'id'=>1,
		'name'=>'a',
		'mail'=> array('a1@mail.com','a2@mail.com')
	),
	array(
		'id'=>2,
		'name'=>'b',
		'mail'=> array('b1@mail.com','b2@mail.com')
	),
	array(
		'id'=>3,
		'name'=>'c',
		'mail'=> array('c1@mail.com','c2@mail.com')
	),
	array(
		'id'=>4,
		'name'=>'d',
		'mail'=> array('d1@mail.com','d2@mail.com')
	)
);

//$array = Array('tokyo' => '東京', 'kyoto' => '京都', 'osaka' => '大阪');
echo 'while'."\n";
while ($value = current($list)) {
    echo 'ID:'.$value['id']."\t".'name:'.$value['name']."\t".'mail:'.$value['mail'][0]."\t".'mail:'.$value['mail'][1].'<br>';
    next($list);
}
//current()内部配列ポインタが現在指している要素の値を取得する
//next()内部ポイント処理（ひとつ進めた）後の要素の値を返します。次の要素がない場合は、falseを返す

$list = array(
	array(
		'id'=>1,
		'name'=>'a',
		'mail'=> array('a1@mail.com','a2@mail.com')
	),
	array(
		'id'=>2,
		'name'=>'b',
		'mail'=> array('b1@mail.com','b2@mail.com')
	),
	array(
		'id'=>3,
		'name'=>'c',
		'mail'=> array('c1@mail.com','c2@mail.com')
	),
	array(
		'id'=>4,
		'name'=>'d',
		'mail'=> array('d1@mail.com','d2@mail.com')
	)
);

echo 'foreach'."\n";
foreach ($list as $key => $value) {
		echo 'ID:'.$value['id']."\t". 'name:'.$value['name']."\t".'mail1:'.$value['mail'][0]."\t".'mail:2'.$value['mail'][1].'<br>';
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