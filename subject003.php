<?php
	$array = array (
	"first" => "hogehpge",
	"seond" => "fugafuga",
	"third" => "mogemoge",
	);

//foteachを使ってkey,valueそれぞれを使って毎回echoするような制御分

foreach ($array as $key => $value) {
		echo $key;
		echo $value;
}



//unset($value);