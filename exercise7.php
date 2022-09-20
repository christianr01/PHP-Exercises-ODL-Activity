<!-- RULLODA, Christian S. -->
<!-- CC4 - PHP Exercises ODL Activity -->
<!-- PHP exercise 7 -->
<html>
<head>
	<title>PHP exercise 7</title>
</head>
<body>
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 7; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 7; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
</body>
</html>