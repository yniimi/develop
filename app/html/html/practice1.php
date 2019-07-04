<?php
	require("validate.php");

// 課題
// 以下のvalue1,2,3...を使って$valueを生成する関数を作成し、$answerと同じ文字列を表示せよ
// ただし、表示は echo_string()関数を使用する

	// 例
	// ------------------------------------------
	function practiceSample($value1) {
		$value = $value1;
		return $value;
	}

	$value1 = "abc";

	$value = practiceSample($value1);
	$answer = "abc";
	echo_string($value, $answer);


	// 文字列内に変数展開する形で$valueを生成
	// ------------------------------------------
	function practice1($value1, $value2) {
		//$value = ...
	}

	$value1 = "abc";
	$value2 = "xyz";

	$value = practice1($value1,$value2);
	$answer = "abcxyz";
	echo_string($value, $answer);


	// 文字列を結合して$valueを生成
	// ------------------------------------------
	function practice2($value1, $value2) {
		//$value = ...
	}

	$value1 = "abc";
	$value2 = "xyz";

	$value = practice2($value1, $value2);
	$answer = "abcxyz";
	echo_string($value, $answer);


	// 文字列の結合
	// ------------------------------------------
	function practice3($value1, $value2, $value3) {
		//$value = ...
	}

	$value1 = "abc";
	$value2 = 123;
	$value3 = "xyz";

	$value = practice3($value1, $value2, $value3);
	$answer = "abc123xyz";
	echo_string($value, $answer);


	// 数値（int）から文字列への変換
	// ------------------------------------------
	function practice4($value1) {
		//$value = ...
	}

	$value1 = 123;

	$value = practice4($value1);
	$answer = "123";
	echo_string($value, $answer);


	// 数値（float）から文字列への変換
	// ------------------------------------------
	function practice5($value1) {
		//$value = ...
	}

	$value1 = 456.789;

	$value = practice5($value1);
	$answer = "456.789";
	echo_string($value, $answer);


	// 論理値（boolean）を判定する
	// ------------------------------------------
	function practice6($value1) {
		//$value = ...
	}

	// trueの時判定
	$value1 = true;
	$value = practice6($value1);
	$answer = "TRUE";
	echo_string($value, $answer);

	// falseの時判定
	$value1 = false;
	$value = practice6($value1);
	$answer = "FALSE";
	echo_string($value, $answer);

	//そもそも booleanで無い時判定
	$value1 = "abc";
	$value = practice6($value1);
	$answer = "UNEXPECTED";
	echo_string($value, $answer);


	// nullを判定する
	// ------------------------------------------
	function practice7($value1) {
		//$value = ...
	}

	$value1 = null;
	$value = practice7($value1);
	$answer = "NULLです";
	echo_string($value, $answer);

	$value1 = 123;
	$value = practice7($value1);
	$answer = "NULLじゃないです";
	echo_string($value, $answer);


	// 配列を文字列にする
	// ------------------------------------------
	function practice8($value1) {
		//$value = ...
	}

	$value1 = array("a",2,null);

	$value = practice8($value1);
	$answer = "[a,2,null]";
	echo_string($value, $answer);


	// 連想配列を文字列にする
	// ------------------------------------------
	function practice9($value1) {
		//$value = ...
	}

	$value1 = array("a"=>1,"b"=>"xyz","c"=>null);

	$value = practice9($value1);
	$answer = "{'a':1,'b':'xyz','c':null}";
	echo_string($value, $answer);

?>