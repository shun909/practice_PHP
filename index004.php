<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php

$link =  mysql_connect("localhost", "root" , "shun909");

//データベースを選択する
$db = mysql_select_db("ex", $link);

$query = "INSERT INTO users(id, name, address, tel) VALUES(9, 'dare', 'doko', 'bango')";

$result = mysql_query($query, $link);

echo "<pre>";
var_dump($result);
echo "</pre>";
