<!DOCTYPE html>
<html>
<head>
	<title>Schaakbord</title>
	<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="login.php">Login</a>
  <a href="registration.php">Register</a>
</div>
</head>
<body>
	<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">

</body>
</html>

<?php

	for ($row=1; $row <=8 ; $row++) { 
		echo "<tr>";
			for ($col=1; $col <=8 ; $col++) { 
				
				$totaal=$row+$col;
				if ($totaal%2==0) {
					echo "<td height=30px width=30px bgcolor=#000000></td>";
				}
				else{
					echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
				}
			}
			echo "</tr>";
	}
  ?>