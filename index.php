<!DOCTYPE html>
<html>
<head>
	<title>Coursera PHP</title>
	<style>
		body {
			background-color: palegreen;
			padding: 5px;
			font-size: 16px;
		}
		span {
			background-color: silver;
			padding: 5px;
			border-radius: 10px;
		}

		div {
			margin: 5px;
		}
	</style>
</head>
<body>

<?php

$www = 123;

$msg = $www > 100 ? "Large" : "Small";
echo "<h5>First: $msg \n</h5>";

$msg = ($www % 2 !== 0) ? "Even" : "Odd";
echo "<h5>Second: $msg \n</h5>";

$msg = (($www-1) % 2) ? "Even" : "Odd";
echo "<h5>Third: $msg \n</h5>";

$stuff = array('firstName' => 'Obafemi' , 'lastName' => 'Oderanti' );
	echo ("<pre>");
	print_r($stuff);
	echo ("</pre>");
	var_dump($stuff);

	echo "<p></p>";

$newArr = array();
$newArr["first"] = "Obafemi";
$newArr["middle"]= "Samuel";
$newArr["last"]  = "Oderanti";

print_r($newArr);

	echo "<p></p>
	";
foreach ($newArr as $k => $v) {
		echo $k, " => ", $v, "<p></p>";
}

$color = array("green", "SlateBlue", "orange", "silver", "DodgerBlue", "metalred", "Teal", "Tomato", "Orange", "MediumSeaGreen", "Violet", "Gray");
	
	shuffle($color);

	for ($i=0; $i < count($color); $i++) { 
		echo "<div>I = ", $i, ", Value = ", "<span style='background-color:", $color[$i], ";'>" , $color[$i], "</span></div>";
	}

	echo "Count is: ",count($color),"<p></p>";
	echo "isset(color[key]) is: ";
	var_dump(isset($color['key']));
	echo "<p></p>";
	echo "<p></p>","is_array(color) is: ";
	var_dump(is_array($color));
	echo "<p></p>";
	echo isset($color['key']) ? "The array is set with keys" : "The array is not set with keys";

	$newStr = 'Sudden mortality - often with few or no signs, Respiratory - gasping swelling of wattles & combs, Nervous- tremors of the head and neck, Digestive: diarrhea thirst , Reproductive: soft-shelled or shell-less eggs & decreased egg numbers';

	$anotherArr = explode(',', $newStr);
	echo ("<pre>");
	print_r($anotherArr);
	echo ("</pre>");
?>

</body>
</html>
