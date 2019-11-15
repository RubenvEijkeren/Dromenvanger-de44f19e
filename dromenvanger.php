<<?php
	echo "Hoeveel vrienden zal ik vragen om hun droom?\n";
	$aantal = readline();
	if (!(is_numeric($aantal))){
		echo "Dat is geen nummer\n";
		exit;
	}
	$arr = array();
	$result = array();
	$i = 0;
	while ($i  < $aantal){
		$j = 0;
		echo "Wat is jouw naam?\n";
		$name = readline();
		$arr[$name] = array();
		echo "Hoeveel dromen ga je opgeven?\n";
		$dromen = readline();
		while ($j < $dromen)
		{
			echo "Wat is jouw droom?\n";
			$droom = readline();
		//	var_dump($arr);
			array_push($arr[$name], $droom);
			$j++;
		}
		$i++;
		foreach ($arr[$name] as $key => $value) {
		$templine =  $name . " heeft dit als droom: " . $value . "\n";
		array_push($result, $templine);
		}
	}
	foreach ($result as $key => $value) {
			echo $value;
		}
//	var_dump($arr);
?>