<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Eingabe Formular</title>
</head>
<body>
    <?php
        $passwort = htmlentities($_POST["passwort"]);
        if ($passwort == "bingo")
            echo "Zugang gestattet!<br>";
        else
            echo "Zugang verweigert!<br>";
    ?>
</body>
</html>