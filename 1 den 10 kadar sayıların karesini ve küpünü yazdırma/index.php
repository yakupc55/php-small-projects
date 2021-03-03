<!DOCTYPE html>
<html>
<head>
	<title>
		sayıların karesi küpü tablosu
	</title>
</head>
<body>
<?php
	echo "<table border='1' width='200px'>";
	echo "<tr>";
	echo "<th>Sayı </th>";
	echo "<th>karesi</th>";
	echo "<th>küpü</th>";
	echo "<tr>";

	for ($i=1; $i <=10 ; $i++) { 
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$i*$i."</td>";
		echo "<td>".$i*$i*$i."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>