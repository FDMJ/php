<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Match</title>
</head>
<body>
    <?php
        $wuerfel = 6;

        /* Einzelne Fälle */
        echo match($wuerfel){
            1 => "Eins",
            2 => "Zwei",
            3 => "Drei",
            4 => "Vier",
            5 => "Fünf",
            6 => "Sechs",
            default => "Kein Würfelwert",
        };
        echo "<br>";

        /* Zusammengefasste Fälle */
        echo match($wuerfel){
            1, 3, 5 => "Ungerade Zahl",
            2, 4, 6 => "Gerade Zahl",
            default => "Kein Würfelwert"
        };
        echo "<br>";
    ?>
</body>
</html>