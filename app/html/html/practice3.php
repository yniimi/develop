<?php
	require("validate.php");

// 課題
// 以下のデータと制御構文を使って必要な値を用意せよ

	// 例 if else
	// ------------------------------------------
function practice1 ($data) {
	/*
	dataが"a"なら"OK"。それ以外なら"NG"を返す
	*/
	$returnvalue = "";
	if($data ==="a") {
		$returnvalue = "OK";
	}
	else {
		$returnvalue = "NG";
	}

	return $returnvalue;
}
	echo_string( practice1("a"), "OK");
	echo_string( practice1("b"), "NG");

	// 厳密な判定
	// ------------------------------------------
function practice1_2 ($data) {
	/*
	dataが数字の123なら"OK"。それ以外なら"NG"を返す
	*/
	$returnvalue = "";
	if($data === 123) {
		$returnvalue = "OK";
	} else {
		$returnvalue = "NG";
	}
	return $returnvalue;
}
	echo_string( practice1_2(123), "OK");
	echo_string( practice1_2("123"), "NG");
	echo_string( practice1_2(456), "NG");
	echo_string( practice1_2("456"), "NG");

	// 厳密でない判定
	// ------------------------------------------
function practice1_3 ($data) {
	/*
	dataが123のような形なら"OK"。それ以外なら"NG"を返す
	*/
	$returnvalue = "";
	if ($data == 123) {
		$returnvalue = "OK";
	} else {
		$returnvalue = "NG";
	}
	return $returnvalue;
}
	echo_string( practice1_3(123), "OK");
	echo_string( practice1_3("123"), "OK");
	echo_string( practice1_3(456), "NG");
	echo_string( practice1_3("456"), "NG");


	// for 添字をつけて表示する
	// ------------------------------------------
function practice2 ($data) {
	/*
	$dataは文字の配列とする
	配列の前に添え字を付けて表示する
	*/
	$returnvalue = "";

	return $returnvalue;
}
	$input = array("a","b","c","d","e");
	$answer = "0:a 1:b 2:c 3:d 4:e ";
	echo_string(practice2 ($input), $answer);


	// for 合計を計算
	// ------------------------------------------
function practice3 ($data) {
	/*
	$dataは数字の配列とする
	配列の値に添字の値を掛けて合計する
	*/
	$returnvalue = 0;

	return $returnvalue;
}

	$input = array(1,2,3,4);
	$answer = 1*0 + 2*1 + 3*2 + 4*3;
	echo_string(practice3 ($input),$answer,"integer");

	// for 条件付きで計算
	// ------------------------------------------
function practice4 ($data) {
	/*
	$dataは数字の配列とする
	それぞれの値を合計するが、添字が2以上だったら10倍して足す
	*/
	$returnvalue = 0;

	return $returnvalue;
}

	$input = array(1,5,3,2);
	$answer = 1 + 5 + 3*10 + 2*10;
	echo_string(practice4 ($input),$answer,"integer");



	// foreach
	// ------------------------------------------
function practice5 ($data) {
	/*
	$dataは文字の配列とする
	それぞれの値をスペース区切りで連結して表示する
	*/
	$returnvalue = "";

	return $returnvalue;
}

	$input = array("I","have","an","apple");
	$answer = "I have an apple ";
	echo_string(practice5 ($input),$answer);


	// foreach（条件判定あり）
	// ------------------------------------------
function practice6 ($data) {
	/*
	$dataは文字の配列とする
	それぞれの値をスペース区切りで連結して表示する
	ただし、appleはpenに適切に変更する
	*/
	$returnvalue = "";

	return $returnvalue;
}
	// ※２タイプどちらも正解するようにしてください
	$input = array("I","have","an","apple");
	$answer = "I have a pen ";
	echo_string(practice6 ($input),$answer);

	$input = array("pen","pineapple","apple","pen");
	$answer = "pen pineapple pen pen ";
	echo_string(practice6 ($input),$answer);

	// foreach（連想配列）
	// ------------------------------------------
function practice7 ($data) {
	/*
	$dataは文字の連想配列とする
	それぞれのkeyとvalueを適切に連結して表示する
	*/
	$returnvalue = "";

	return $returnvalue;
}

	$input = array("name"=>"ピカチュウ","type"=>"でんき","effective"=>array("ひこう","みず"),"weak"=>"じめん");
	$answer = "nameはピカチュウです。typeはでんきです。effectiveはひこうとみずです。weakはじめんです。";
	echo_string(practice7 ($input),$answer);


	// foreach（連想配列ｘ２）
	// ------------------------------------------
function practice8 ($data1,$data2) {
	/*
	$data1、$data2は文字の連想配列とする
	$data2を使って$data1のkeyを適切な名前に変換する（エラー判定は不要）
	keyとvalueを適切に連結して表示する
	ただし、foreachの使用は１回。if,for,while文などの使用不可とする
	*/
	$returnvalue = "";

	return $returnvalue;
}

	$input1 = array("name"=>"ピカチュウ","type"=>"でんき","effective"=>array("ひこう","みず"),"weak"=>"じめん");
	$input2 = array("name"=>"名前","type"=>"タイプ","effective"=>"ばつぐん","weak"=>"じゃくてん");
	$answer = "名前はピカチュウです。タイプはでんきです。ばつぐんはひこうとみずです。じゃくてんはじめんです。";
	echo_string(practice8 ($input, $input2),$answer);
	
	// 追加問題
	$input1 = array("name"=>"ユキノオー","type"=>array("くさ","こおり"),"effective"=>array("みず","じめん","いわ","くさ","ひこう","ドラゴン"),"weak"=>array("ほのお","かくとう","ひこう","どく","いわ","むし","はがね"));
	$answer = "名前はユキノオーです。タイプはくさ、こおりです。ばつぐんはみずとじめんといわとくさとひこうとドラゴンです。じゃくてんはほのおとかくとうとひこうとどくといわとむしとはがねです。";

	// while
	// ------------------------------------------
function practice9 ($data1,$data2) {
	/*
	$data1,$data2は数値とする（$data1 < $data2）
	$data1から$data2までの数字を合計する
	*/
	$returnvalue = 0;

	return $returnvalue;
}

	$input1 = 10;
	$input2 = 100;
	$answer = 5005;
	echo_string(practice9 ($input, $input2),$answer,"integer");


	// while（条件つき無限ループ）
	// ------------------------------------------
function practice10 () {
	/*
	１～１０のサイコロを振り、10が出るまで繰り返す
	出た目をカンマ区切りで文字列にして返す
	※サイコロの目は以下の$diceで定義する
	*/
	$dice = rand(1,10);

	$returnvalue = "";

	return $returnvalue;
}

	$answer = practice10();
	/*
	※この問題はランダムなので、正解が用意できません。
	$answerは以下のような形になります。（数は毎回変わります）
	3,5,4,7,9,8, ... OK
	3,5,4,7,9,8,10, ... NG（10が入ってはいけない）
	*/
	echo $answer;


	// while break
	// ------------------------------------------
function practice11 ($data1,$data2) {
	/*
	$data1,$data2は数値とする（$data1 < $data2）
	$data1から$data2までの数字を合計する
	whileおよびbreakを使って作成すること
	*/
	$returnvalue = 0;

	return $returnvalue;
}

	$input1 = 10;
	$input2 = 100;
	$answer = 5005;
	echo_string(practice11 ($input, $input2),$answer,"integer");


	// do while
	// ------------------------------------------
function practice12 ($data) {
	/*
		要素を二倍にした配列を作る
		do～whileを使用し、要素が10だったらループを抜ける
		ただし、その場合10も二倍対象とする
	*/
	$returnvalue = array();


	return $returnvalue;
}

	$input  = array(1,2,3,5, 7, 10,9,8,6,4);
	$answer = array(2,4,6,10,14,20);
	echo_string(practice12 ($input),$answer,"array");

	// switch case
	// ------------------------------------------
function practice13 ($data) {
	/*
		入力は数字を想定
		入力が
			2の時は「two」
			3の時は「さん」
			5の時は「五」
			それ以外のときは数字に「です」をつけて表示する
		switch～caseを使用すること
		if文の使用は不可
		配列の使用も不可
	*/
	$returnvalue = "";


	return $returnvalue;
}

	echo_string(practice13 (1),"1です");
	echo_string(practice13 (2),"two");
	echo_string(practice13 (3),"さん");
	echo_string(practice13 (4),"4です");
	echo_string(practice13 (5),"五");


	// continue
	// ------------------------------------------
function practice14 ($data) {
	/*
	配列の値を二倍した配列を返す
	ただし、数字が3の時はスキップする
	スキップにはcontineを使用する
	*/
	$returnvalue = array();


	return $returnvalue;
}
	$input  = array(1,2,3,4,3,5, 6, 3);
	$answer = array(2,4,  8,  10,12  );
	echo_string(practice14 ($input),$answer,"array");
?>