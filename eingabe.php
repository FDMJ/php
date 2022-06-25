<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Eingabe Formular</title>
</head>
<body>
    <?php
        $vorname = htmlentities($_POST["vorname"]);
        $nachname = htmlentities($_POST["nachname"]);
        $strasse = htmlentities($_POST["strasse"]);
        $plz = htmlentities($_POST["plz"]);
        $ort = htmlentities($_POST["ort"]);

        echo "Guten Tag, $vorname $nachname" . "<br>";
        echo "Ihre Adresse lautet: <br>";
        echo "$strasse in $plz, $ort";
    ?>
</body>
</html>