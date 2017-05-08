<?php 


$name = "IIUM";
$address = "Gombak";

$names = array("IIUM", "UM", "UPM", "UKM");


//print($name . $address);


//print_r($names[0]);




for ($i=0; $i < count($names); $i++) { 
	//echo $names[$i];
}


$a = 20;




/*if($names[0] == "IIUM"){
	echo "Welcome";
} else if($names[0] == "UM") {
	echo "Its UM";
}*/




foreach ($names as $name) {
	echo $name;
}
