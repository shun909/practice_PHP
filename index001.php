<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
</body>
</html>

<?php
$ary = array("hoge","fuga","moge");
foreach($ary as $str){
		switch ($str) {
			case "hoge":
				echo "hogeなんだぜ！";
				echo "<br />";
				break;
			case "fuga":
				echo "fugaなんだぜ！";
				echo "<br />";
				break;
				case 'moge':
				echo "mogeなんだぜ！";
				echo "<br />";
				break;
		}
	echo $str;
	echo "<br />";
}

//シングルコーテーションとダブルコーテーション
$hoge = "ほげほげ";
$fuga = "ふがふが";

echo $hoge;
echo "<br />";

echo $fuga;
echo "<br />";

echo "$hoge";
echo "<br />";

echo '$hoge';
echo "<br />";








