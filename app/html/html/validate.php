<?php

function echo_string($string ,$answer, $answertype = "string") {
	static $count = 1;
	echo "課題{$count}\t";
	$type = gettype($string);
	if($type !== $answertype) {
		echo "エラー！ {$type}は{$answertype}ではありません！\n";
	}
	else {
		if($type !== "string") {
			ob_start();
			var_dump($string);
			$ret = ob_get_contents();
			ob_end_clean();
		}
		else {
			$ret = $string;
		}
		if($string === $answer) {
			echo "正解！ " . $ret . "\n";
		}
		else {
			echo "エラー！ " . $ret . "\n";
		}
	}
	$count++;
}

?>