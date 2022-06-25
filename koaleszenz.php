<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Match</title>
</head>
<body>
    <?php
       echo $temperatur ?? "Temperatur nicht vorhanden";
       echo "<br>";

       $temperatur = 36.5;
       echo $temperatur ?? "Temperatur nicht vorhanden";
       echo "<br>";

       echo $luftdruck ?? "Luftdruck nicht vorhanden";
       echo "<br>";

       $luftdruck = 1013.25;
       echo $luftdruck ?? "Luftdruck nicht vorhanden";
       echo "<br>";
    ?>
</body>
</html>