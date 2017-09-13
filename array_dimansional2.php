<?php
	$motor = array
	(
		array("Ninja",12,22),
		array("Supra",13,23),
		array("Kawasaki",14,24),
		array("Jupiter MX",15,25)
	);
	sort($motor);

	for ($row = 0; $row < 4; $row++) {
  		echo "<p><b>Row number $row</b></p>";
 	 	echo "<ul>";
  	for ($col = 0; $col < 3; $col++) {
    	echo "<li>".$motor[$row][$col]."</li>";
  	}
  		echo "</ul>";
	}
	

?>