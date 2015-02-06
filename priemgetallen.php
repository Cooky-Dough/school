<?php

	for ($getal=2; $getal <=100 ; $getal++) { 
		if ($getal==2 || $getal==3 || $getal==5 || $getal==7 || $getal%2>0 && $getal%3>0 && $getal%5>0 && $getal%7>0) {
			echo "<br>" . $getal . " is een priemgetal.</br>";
		}
	}


?>