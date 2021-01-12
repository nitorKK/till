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
// print "php!\n";
// echo 'php!';
// date_default_timezone_set('Asia/Tokyo');
// echo '現在は'.date('Y年m月d日 G時 i分 s秒').'です';
// date_default_timezone_set('Asia/Tokyo');
// $today = new DateTime();
// echo $today->format('G時 i分 s秒');

// $sum = 100+1050+200+500;
// $tax = 1.08;
// echo '合計金額は：'.$sum.'です'."\n";
// echo '税込み価格は：'.$sum*$tax.'です';
// $i = 1;
// echo $i ."\n";
// $i = $i + 1;
// echo $i."\n";

$i = 1;
while($i <= 365){
echo $i."\n";
$i = $i + 1;
}

?>
</pre>
</main>
</body>    
</html>