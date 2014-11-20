<?php


	// $a, $bとして引数を受け取り、それを足し算する関数を定義して下さい
    function add($a, $b) {
    	return $a + $b;
    }
    // 上記定義した関数を利用し、任意の足し算を行い、結果を$resultという変数に格納して下さい
    $result = add(3, 5);

    // 上記の$resultの変数をvar_dumpで結果を確認できるようにしておいてください
	var_dump($result);