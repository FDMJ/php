<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>Zahlen!</title>
</head>
<body>

<?php
	$ErsteZahl = 22.50;
	$ZweiteZahl = 12.30;
	$DritteZahl = 5.20;
	
	$UsSt = 1.19;
	
	$Ergebnis = ($ErsteZahl + $ZweiteZahl + $DritteZahl) * $UsSt;
	
	echo "Der Einkauf kostet: " . $Ergebnis;
?>
</body>
</html>