<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Match</title>
</head>
<body>
    <?php
        $x = 12;
        $y = 12;

        $z = $x < $y ? $x : $y;
        echo "Kleinere Zahl: $z<br>";

        echo "Kleinere Zahl: " . ($x < $y ? $x : $y) . "<br>";

        $f = $x < $y ? "1" : ($x > $y ? "2" : "3");
        echo "Fall $f<br>";
    ?>
</body>
</html>