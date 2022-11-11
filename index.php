
<?php
	echo "Задание 1 <br>";

	#Никита
	/*
	Дата выполнения - 10.11.22
	*/
	echo "Приветствую!<br>";

?>
<br>
<?php
	echo "Задание 2 <br>";

	$teleChanel = "STS";
	$developAdress = "Komsomol'skaya St.";
	$carColor = "Blue";
	$waterTemp = 24;
	$phoneModel = "Iphone";

?>
<br>
<?php
	echo "Задание 3 <br>";

	$a = 3;
	$b = 5;
	$c = 8;
	echo "$a, $b, $c <br>";
	$new = $a + $b + $c;
	echo "$new <br>";
	$result = 2 + 6 + 2 / 5 - 1;
	echo "$result <br>";

?>
<br>
<?php
	echo "Задание 4 <br>";

	$a = 1;
	$b = 2;
	echo "$a, $b <br>";
	$c = $a;
	$d = &$b;
	echo "$c, $d <br>";
	$a = 3;
	$b = 4;
	echo "$a, $b, $c, $d <br>";

?>
<br>
<?php
	echo "Задание 5 <br>";

	define("a", 41);
	define("b", 33);
	$res = constant("a") + constant("b");
	echo "$res <br>";

?>
<br>
<?php
	echo "Задание 6 <br>";

	$a = 152;
	$b = '152';
	$c = 'London'; $d = array(152); $e = 15.2;
	$f = false;
	$g = true; 
	echo gettype($a) . " " . gettype($b) . " " . gettype($c) . " " . gettype($f) . " " . gettype($g) . "<br>";

?>
<br>
<?php
	echo "Задание 7 <br>";

	$a = "вставки";
	$b = "переменных";
	echo "Привем $a двух $b <br>"

?>
<br>
<?php
	echo "Задание 8 <br>";

	$a = "Доброе утро";
	$b = " дамы";
	$c = " и господа";
	echo $a . $b . $c . "<br>";

?>
<br>
<?php
	echo "Задание 9 <br>";

	$arr1 = range(1, 5, 1);
	$arr2 = range(6, 10, 1);
	$arr1["!"] = 25;
	unset($arr2[0]);
	echo $arr1[2] . " " . $arr2[2] . "<br>";
	print_r($arr1);
	echo "<br>";
	print_r($arr2);
	echo "<br>";
	echo count($arr1) . " и " . count($arr2) . "<br>";

?>
<br>
<?php
	echo "Задание 10 <br>";

	$count = 0;
	$N = 7;
	while($count < $N){
		$rn = rand(-21, 35);
		echo "$rn <br>";
		$count++;
	}

?>
<br>
<?php
	echo "Задание 11 <br>";

	$count = 0;
	$sum = 0;
	$N = 7;
	while($count < $N){
		$rn = rand(-10, 10);
		$sum += $rn;
		$count++;
	}
	echo "$sum <br>";

?>
<br>
<?php
	echo "Задание 12 <br>";

	$count = 0;
	$N = 7;
	$old = null;
	while($count < $N){
		$rn = rand(-21, 35);
		if($old < $rn){
			$ins = " Больше предыдущего";
		}
		else if($old > $rn){
			$ins = " Меньше предыдущего";
		}
		else{
			$ins = " Равен предыдущему";
		}

		if($count == 0){
			echo "$rn <br>";
		}
		else{
			echo "$rn $ins <br>";
		}
		$count++;
		$old = $rn;
	}

?>
<br>
<?php
	echo "Задание 13 <br>";

	$num = rand(1, 10);
	$a = 1;
	$b = 1;
	$res = 0;
	echo "$num член последовательности <br>";

	switch($num)
	{
		case 1:
			echo "$a <br>";
			break;
		case 2: 
			echo "$b <br>";
			break;
		default:
			for($i = 2; $i < $num; $i++){
				$res = $a + $b;
				$a = $b; 
				$b = $res;
			}
			echo "$res <br>";
			break;
	}

?>
<br>
<?php
	echo "Задание 14 <br>";

	$num = rand(1, 99999);
	echo "$num <br>";
	while($num > 0){
		echo $num % 10;
		$num = intdiv($num, 10);
	}
	echo "<br>";

?>
<br>
<?php
	echo "Задание 15 <br>";

	$num = rand(1, 99999);
	$t = "$num";
	echo "$num <br>";
	while($num > 0){
		$t = $num % 10;
		if($t % 2 != 0){
			echo $t;
		}
		$num = intdiv($num, 10);
	}
	echo "<br>";

?>
<br>
<?php
	echo "Задание 16 <br>";

	$arr = array();
	for($i = 0; $i < 7; $i++){
		$arr[$i] = rand(-10, 10);
	}

	for($i = 0; $i < count($arr); $i++){
		echo $arr[$i];
	}
	echo "<br>";

?>
<br>
<?php
	echo "Задание 17 <br>";

	$arr = array(array(), array());
	$m = 6;
	$n = 9;

	for($i = 0; $i < $m; $i++){
		for($j = 0; $j < $n; $j++){
			$arr[$i][$j] = rand(-10, 10);
		}
	}

	for($i = 0; $i < $m; $i++){
		for($j = 0; $j < $n; $j++){
			echo $arr[$i][$j] . " ";
		}
		echo "<br>";
	}

?>
<br>
<?php
	echo "Задание 18 <br>";

	$N = 17;
	$arr = range(1, $N, 1);
	$countin = 1;
	for($i = 0; $i < count($arr);){
		for($j = 0; $j < $countin; $j++){
			if($i >= count($arr)){
				break;
			}
			echo $arr[$i] . " ";
			$i++;
		}
		$countin++;
		echo "<br>";
	}

?>
<br>
<?php
	echo "Задание 19 <br>";

	$arr = array();
	$N = 15;
	for($i = 0; $i < $N; $i++){
		$arr[$i] = rand(-10, 10);
	}
	print_r($arr);
	echo "<br>";
	$max = $arr[0];
	for($i = 0; $i < count($arr); $i++){
		if($arr[$i] > $max){
			$max = $arr[$i];
		}
	}
	echo "$max <br>"

?>
<br>
<?php
	echo "Задание 20 <br>";

	$arr = array();
	for($i = 0; $i < 20; $i++){
		$arr[$i] = rand(-10, 10);
	}
	print_r($arr);
	echo "<br>";
	$min = $arr[0];
	for($i = 0; $i < count($arr); $i++){
		if($arr[$i] < $min){
			$min = $arr[$i];
		}
	}
	echo "$min <br>"

?>
<br>
<?php
	echo "Задание 21 <br>";

	$arr1 = array();
	$arr2 = array();
	$firstInd = 2;
	$secondInd = 1;
	for($i = 0; $i < 20; $i++){
		$arr1[$i] = rand(-10, 10);
		$arr2[$i] = rand(-10, 10);
	}

	while(true){

		if($firstInd >= count($arr1)){
			break;
		}

		if($arr1[$firstInd] > $arr2[$secondInd]){
			echo $arr1[$firstInd] . " больше " . $arr2[$secondInd] . "<br>";
		}
		else if($arr1[$firstInd] < $arr2[$secondInd]){
			echo $arr1[$firstInd] . " меньше " . $arr2[$secondInd] . "<br>";
		}
		else{
			echo $arr1[$firstInd] . " равно " . $arr2[$secondInd] . "<br>";
		}
		$firstInd += 3;
		$secondInd += 2;
	}

?>
<br>
<?php
	echo "Задание 22 <br>";

	$arr = array();
	for($i = 0; $i < 10; $i++){
		$arr[$i] = rand(5, 12);
	}

	for($i = 0; $i < count($arr); $i++){
		switch($arr[$i]){
			case 5:
				echo "(пять) ";
				break;
			case 6:
				echo "(шесть) ";
				break;
			case 7:
				echo "(семь) ";
				break;
			default:
				echo "(какое-то другое число) ";
				break;
		}
	}
	echo "<br>"

?>
<br>
<?php
	echo "Задание 23 <br>";

	echo "Первый способ <br>";

	$a = array();
	$b = array(12, 5, 17, 6 ,4);
	for($i = 0; $i < 10; $i++){
		$a[$i] = rand(1, 20);
	}

	for($i = 0; $i < count($a); $i++){
		$yes = true;
		for($j = 0; $j < count($b); $j++){
			if($a[$i] == $b[$j]){
				$yes = false;
			}
		}

		if($yes){
			echo $a[$i] . " ";
		}
	}
	echo "<br> Второй способ <br>";
	for($i = 0; $i < count($a); $i++){
		if(!in_array($a[$i], $b)){
			echo $a[$i] . " ";
		}
	}
	echo "<br>";

?>