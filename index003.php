<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
</body>
</html>

<?php

//データベースとコネクトを張る
$link = mysql_connect("localhost", "root" , "shun909");

//データベースを選択する
$db = mysql_select_db("ex", $link);


//誰に
$query = "SELECT = FROM users";
$insertQuerr = "INSERT INTO users(id, name, address, tel) VALUES(9, 'dare', 'doko', 'bango');
$insertResult = mysql_query($insertResult, $link);


//
$result = mysql_query($query, $link);
$data = mysql_fetch_assoc($result);



echo "<php>";
var_dump($data);

echo "</php>";