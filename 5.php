<?php

$a = array(1,2,3,4,5,6,7,8,9);

echo "<b>Input: Create Matrik(3) ";
foreach ($a as $nil_a) {
	echo $nil_a."&nbsp;&nbsp;&nbsp;";
}
	echo "<hr/>";
	$x = 1;
	foreach ($a as $nil_a) {
		echo $nil_a."&nbsp;&nbsp;&nbsp;";
		if($x == 3){
			echo "<br/>";
			$x = 0;
		}
		$x++;
	}

	echo "<hr/>";
	$x = 1;
	echo "<table>";
	foreach ($a as $nil_a) {
		if($x == 1){
			echo "<tr>";
			echo "<td align=\"center\"style=\"padding:10px;border-left:1px solid #000;\">".$nil_a."</td>";
		}if ($x > 1 AND $x < 3) {
			echo "<td align=\"center\"style=\"padding:10px;\">".$nil_a."</td>";
		} if($x == 3){
			echo "<td align=\"center\"style=\"padding:10px;border-right:1px solid #000;\">".$nil_a."</td>";
			echo "</tr>";
			$x = 0;
		}
		$x++;
	}
	echo "</table>";
?>