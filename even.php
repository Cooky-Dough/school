<?php

function ongelijk(){
for ($getal = 0; $getal < 100 ; $getal++) { 
	if ( $getal % 2 == 0) {
		echo "<p>" . $getal . " is gelijk </p>";
	}elseif ( $getal % 1 == 0) {
		echo "<p>" . $getal . " is ongelijk.</p>";
	}
}

}

ongelijk();
?>