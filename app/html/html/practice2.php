<?php
	require("validate.php");

// �ۑ�
// �ȉ���value1,2,3...���g����$value���쐬���A$answer�Ɠ����������\������
// �������A�\���� echo_string()�֐����g�p����

	// ��
	// ------------------------------------------
{	
	$value1 = "abc";

	$value = $value1;
	$answer = "abc";
	echo_string($value, $answer);
}


	// ���l�iint�j���������ĕ�����ւ̕ϊ�
	// ------------------------------------------
{
	$value1 = 123;
	$value2 = 456;
	
	$value = (string)$value1.(string)$value2;
	$answer = "123456";
	echo_string($value, $answer);
}

	// ���l�iint�j���������ĕ�����ւ̕ϊ�
	// ------------------------------------------
	{
		$value1 = "abc";
		$value2 = 111;
		$value3 = 222;
		$value4 = "xyz";
	
		$value = $value1.(string)$value2.(string)$value3.$value4;
		$answer = "abc111222xyz";
		echo_string($value, $answer);
	}

	// ���l�iint�j���v�Z���ĕ�����ւ̕ϊ�
	// ------------------------------------------
	{
		$value1 = "abc";
		$value2 = 111;
		$value3 = 222;
		$value4 = "xyz";
		
		
		$value = $value1. (string)($value2 + $value3). $value4;
		
		
		$answer = "abc333xyz";
		echo_string($value, $answer);
	}

	// ���l�ifloat�j���當����ւ̕ϊ�
	// ------------------------------------------
	{
		$value1 = 456.789;
		$value2 = 123.456;
	
		$value3 = $value1 + $value2;
		// $value = "{$value1}+{$value2}={$value3}";
		$value = (string)$value1."+".(string)$value2."=".(string)$value3;
		$answer = "456.789+123.456=580.245";
		echo_string($value, $answer);
	}

	// ���l�ifloat�j��int�ɂ��Ă���v�Z���ĕ�����ւ̕ϊ�
	// ------------------------------------------
	{
		$value1 = 456.789;
		$value2 = 123.456;
	
		$value1 = (int)(floor($value1));
		$value2 = (int)(floor($value2));
		// $value1 = (int)$value1;
		// $value2 = (int)$value2;
		$value3 = $value1 + $value2;
		$value = (string) $value3;
		$answer = "579";
		echo_string($value, $answer);
	}

	// �z�񂩂�w��̍������o��
	// ------------------------------------------
	{
		$value1 = array("a","b","c","d","e","f");
		
	
		$answer = "d";
		echo in_array($answer,$value1);
		$value3 = array_search($answer,$value1);

		$value = $value1[$value3];
		echo_string($value, $answer);
	}

	// �A�z�z�񂩂�w��̍������o��
	// json�g�p�s��
	// ------------------------------------------
	{
		$value1 = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6);

		function practice1(){
			if (is_null($value1)){
				echo("�l������܂���");
			} else {
				$answer = "5";
				in_array($answer,$value1);
				$value3 = array_search($answer,$value1);
				$value = $value1[$value3];
				$value2 = $value1["e"];
				$value = (string) $value2;
			}
		}
		
		echo_string($value, $answer);
	}
	

	// ���d�z�񂩂�w��̍������o��
	// json�g�p�s��
	// ------------------------------------------
{
	$value1 = array(
			array("a",array("x","y","z"),"b","c","d"),
			array("e","f"),
			array("o"),
			array("p","q","e","r","s"),
	);

	// �����̖��͂R�p�^�[���̉񓚂��쐬���Ă�������

	$value = $value1[0][3];
	$answer = "c";
	echo_string($value, $answer);

	$value = $value1[3][3];
	$answer = "r";
	echo_string($value, $answer);

	$value = $value1[0][1][2];
	$answer = "z";
	echo_string($value, $answer);
}

	// ���d�A�z�z�񂩂�w��̍������o��
	// json�g�p�s��
	// ------------------------------------------
{
	$value1 = array(
			"a"=>1,
			"b"=>array(2,3,4),
			"c"=>array("o"=>4,"p"=>5),
			"d"=>array("p"=>array("q"=>6,"r"=>7),"s")
	);

	// �����̖��͂S�p�^�[���̉񓚂��쐬���Ă�������

	$value2 = $value1["a"];
	$value = (string)$value2;
	$answer = "1";
	echo_string($value, $answer);

	$value2 = $value1["b"][1];
	$value = (string)$value2;
	$answer = "3";
	echo_string($value, $answer);

	$value2 = $value1["c"]["o"];
	$value = (string)$value2;
	$answer = "4";
	echo_string($value, $answer);

	$value2 = $value1["d"]["p"]["r"];
	$value = (string)$value2;
	$answer = "7";
	echo_string($value, $answer);

}


	// ���d�̔z��ƘA�z�z�񂩂�w��̍������o��
	// json�g�p�s��
	// ------------------------------------------
{
	$value1 = array(
			2=>1,
			"b"=>array(2,3=>array("H","I","J"),4),
			array("d"=>array("q"=>6,"r"=>7),"s"),
			"c"=>array("o"=>4,"p"=>array(10,11,12))
	);

	// �����̖��͂S�p�^�[���̉񓚂��쐬���Ă�������

	$value2 = $value1[2];
	$value = (string)$value2;
	$answer = "1";
	echo_string($value, $answer);

	$value2 = $value1["b"][3][2];
	$value = (string)$value2;
	$answer = "J";
	echo_string($value, $answer);

	$value2 = $value1[3]["d"]["q"];
	$value = (string)$value2;
	$answer = "6";
	echo_string($value, $answer);

	$value2 = $value1["c"]["p"][1];
	$value = (string)$value2;
	$answer = "11";
	echo_string($value, $answer);

}


	// ========================================================================
	// �ȉ��͔z��������ł��B
	// $value�̏����l����z��ɂȂ��Ă��܂��B
	// ����ɗv�f���P���ǉ����āA$answer�Ɠ����`�ɂ��Ă��������B
	// ���d�̂��̂ɂ��ẮA�ʓ|�ł����A�q�̔z����P������Ă��������B
	// �����̃^�C�v�̖��́Aecho_string�̑�R������"array"���w�肵�Ă��������B
	// ========================================================================

	// ��j�z������
	// ------------------------------------------
{
	$value = array();
	array_push($value,"a");
	$addparam = "b";
	array_push($value,$addparam);
	$addparam = "c";
	array_push($value,$addparam);

	$answer = array("a","b","c");
	echo_string($value, $answer,"array");
}

	// �z������
	// ------------------------------------------
	{
		$value = array();
		array_push($value,"e");
		array_push($value,"f");
		array_push($value,1);
		array_push($value,2);
		array_push($value,"g");
	
		$answer = array("e","f",1,2,"g");
		echo_string($value, $answer,"array");
	}
	


	// ���d�z������
	// ------------------------------------------
	{
		$value = array();
		
		$value2 = array();
		array_push($value2, "x");
		array_push($value2, "y");
		array_push($value2, "z");
	
		$value3 = array();
		array_push($value3, "a");
		array_push($value3, $value2);
		array_push($value3, "b");
		array_push($value3, "c");
		array_push($value3, "d");
		$value4 = array();
		array_push($value4, "e");
		array_push($value4, "f");
		$value5 = array();
		array_push($value5, "o");
		$value6 = array();
		array_push($value6, "p");
		array_push($value6, "q");
		array_push($value6, "e");
		array_push($value6, "r");
		array_push($value6, "s");
	
		array_push($value, $value3,$value4,$value5,$value6);
	
		$answer = array(
				array("a",array("x","y","z"),"b","c","d"),
				array("e","f"),
				array("o"),
				array("p","q","e","r","s"),
		);
		echo_string($value, $answer,"array");
	}

	// �A�z�z������
	// ------------------------------------------
{
	$value = array();

	$value = array_merge($value,array("a"=>1));
	$value = array_merge($value,array("b"=>2));
	$value = array_merge($value,array("c"=>3));
	$value = array_merge($value,array("d"=>4));
	$value = array_merge($value,array("e"=>5));
	$value = array_merge($value,array("f"=>6));	

	$answer = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6);
	echo_string($value, $answer,"array");
}

	// ���d�A�z�z������
	// ------------------------------------------
{
$value = array();
	
		$value1 = array();
		array_push($value1,"H");
		array_push($value1,"I");
		array_push($value1,"J");
	
		$value2 = array();
		array_push($value2,2);
		var_dump($value2);
		exit;
		$value2 = array_merge($value2,array(3 => $value1));
		var_dump($value2);
		exit;
		// $value2 += array(3 => $value1);
				array_push($value2,4);
	
		$value3 = array();
		$value3 += array("q" => 6);
		$value3 += array("r" => 7);
	
		$value4 = array();
		$value4 += array("d" => $value3);
		array_push($value4,"s");
	
		$value5 = array();
		array_push($value5,10);
		array_push($value5,11);
		array_push($value5,12);
	
		$value6 = array();
		$value6 += array("o" => 4);
		$value6 += array("p" => $value5);
	
		$value += array(2=>1);
		$value += array("b" => $value2);
		array_push($value,$value4);
		$value += array("c" => $value6);
	


	$answer = array(
			2=>1,
			"b"=>array(2,3=>array("H","I","J"),4),
			array("d"=>array("q"=>6,"r"=>7),"s"),
			"c"=>array("o"=>4,"p"=>array(10,11,12))
	);
	echo_string($value, $answer,"array");
}


?>