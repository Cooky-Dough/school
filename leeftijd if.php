<?php
$age = "";
$age = $_GET["age"];
if ($age <= 15) {
	echo "je mag niets";
}

elseif ($age >= 16 && $age < 18) {
	echo "je mag autorijden en scooter rijden";
}elseif ($age >= 18 && $age < 21) {
	echo "je mag bier drinken";
}elseif ($age >= 21) {
	echo "je mag alles";
}


?>