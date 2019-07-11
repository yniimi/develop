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
		$value = "{$value1}m{$value2}";
		echo $value;
		return $value;
	}

	$value1 = abc;
	$value2 = xyz;

	$value = practice1($value1,$value2);
	$answer = "abcmxyz";
	echo_string($value, $answer);


	// 文字列を結合して$valueを生成
	// ------------------------------------------
	function practice2($value1, $value2) {
		$value = $value1."m".$value2; 
		return $value;
	}

	$value1 = "abc";
	$value2 = "xyz";

	$value = practice2($value1, $value2);
	$answer = "abcmxyz";
	echo_string($value, $answer);


	// 文字列の結合
	// ------------------------------------------
	function practice3($value1, $value2, $value3) {
		$value = $value1 .$value2 .$value3;
		return $value;
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
		$value = (string) $value1;
		return $value;
	}

	$value1 = 123;

	$value = practice4($value1);
	$answer = "123";
	echo_string($value, $answer);


	// 数値（float）から文字列への変換
	// ------------------------------------------
	function practice5($value1) {
		$value = "$value1";
		return $value;
	}

	$value1 = 456.789;

	$value = practice5($value1);
	$answer = "456.789";
	echo_string($value, $answer);


	// 論理値（boolean）を判定する
	// ------------------------------------------
	// ◆value1がtrueのときvalueが”TRUE”になる
	function practice6($value1) {
		if($value1 === true) {
			$value = "TRUE";
		} elseif($value1 === false){
				$value = "FALSE";
		} else {
				$value = "UNEXPECTED";
		}
		return $value;
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
	// ◆nullの判定◆　変数の値がNULLかどうか調べるのは、is_null関数 is_null($変数)
	function practice7($value1) {
		if(is_null($value1)){
			$value = "NULLです";
		} else {
			$value = "NULLじゃないです";
		}
		return $value;
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
	//◆value1の配列を、文字列に出力
	function practice8($value1) {
		
		// $array = ["a",2,null];
		// $value = implode(",", $array);
		// return $value;
		// ---------エラー-------nullは値が空っぽ？？だから文字列表記にしたところで表記されない
		
		if($value1[2] === null) {
			$value1[2]="null";
		}
		$string = "[".implode(",",$value1)."]";
		$value = (string)$string;
		return $value;
	}

	$value1 = array("a",2,null);

	$value = practice8($value1);
	$answer = "[a,2,null]";
	echo_string($value, $answer);


	// 連想配列を文字列にする
	// ------------------------------------------
	function practice9($value1) {
		

		$json =  json_encode($value1);// ⇒ {"a":1,"b":"xyz","c":null}
		$value = str_replace("\"","'", $json);	//str_replaceは検索した文字列に一致した全ての文字列を置換する。バックスラッシュで"を文字として扱う。	
		return $value; // str_replace( $検索文字列 , $置換後文字列 , $検索対象文字列 [, int &$count ] )
	}

	$value1 = array("a"=>1,"b"=>"xyz","c"=>null);

	$value = practice9($value1);
	$answer = "{'a':1,'b':'xyz','c':null}";
	echo_string($value, $answer);

?>