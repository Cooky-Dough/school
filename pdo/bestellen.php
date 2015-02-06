<?php
$db = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');

$sql = "select * from gerechten";

$results = $db->query($sql); 


?>
<html>
<head>
	<title>bestellen</title>
</head>
<body>
	<form method="post" action="insert.php">
		<p>
			<label>gerechten</label>
      		<select name="gerechten">
	        <?php 	
	        foreach ($results as $row) {
				echo "<option value=\"" . $row['voedsel_ID'] . "\">" . $row['voedsel_NAAM'] . "</option>";
			} 
			?>
		    </select>

		</p>
		<label>Aantal:</label>
		<input type="text" name = "aantal">
		<input type="submit" value="versturen">
		<p>
		
		
	</form>

</body>
</html>
