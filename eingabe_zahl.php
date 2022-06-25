<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Eingabe Formular</title>
</head>
<body>
    <?php
        $zahl = floatval($_POST["zahl"]);
        $quadrat = $zahl * $zahl;
        echo "Das Quadrat von $zahl ist $quadrat<br>";
    ?>
</body>
</html>