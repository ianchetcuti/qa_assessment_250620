<?php
if ( ! empty($_POST['intArray'])){
	echo "<h2>Results</h2>";
    //Get value of textbox from POST form
	$txtBox=$_POST['intArray'];
	//Split csv into an array
    $array= explode(",", $txtBox);
    //echo sizeof($array);
    $count = 0;
	foreach($array as $item) {
		if(ctype_digit($item) == true && ($item % 4 == 0 || $item % 6 == 0)){
			echo $item .", ";
			$count = $count+1;
		}
	}
	echo "</p>There are ". $count ." multiples of either 4 or 6";
}elseif( ! empty($_POST['strPal'])){
	echo "<h2>Results</h2>";
    //Get value of textbox from POST form
	$txtBox=$_POST['strPal'];
	if($txtBox == strrev($txtBox)) {
		echo "String is a palindrome! :)";
	}else{
		echo "String is not a palindrome :(";
	}
}else{
	echo "Nothing submitted!";
}
?>