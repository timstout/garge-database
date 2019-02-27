<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <title>gar-update-klant3</title>
</head>
<body>
<h1>garage update klant 3</h1>

<p>klant gegvens wijzegen in de tabel klant van de database garage</p>

<?php

require_once "gar-connect.php";

$klantid        = $_POST["klantidvak"];
$klantnaam      = $_POST["klantnaamvak"];
$klantaderes    = $_POST["klantaderesvak"];
$klantposcode   = $_POST["klantposcodevak"];
$klantplaats    = $_POST["klantplaatsvak"];



$sql = $conn->prepare("update klant set klantnaam = :klantnaam,
                                                 klantaderes = :klantaderes,
                                                 klantposcode = :klantposcode,
                                                 klantplaats = :klantplaats
                                                 where klantid = :klantid
");

$sql->execute
    ([
        "klantid"        => $klantid,
        "klantnaam"      => $klantnaam,
        "klantaderes"    => $klantaderes,
        "klantposcode"   => $klantposcode,
        "klantplaats"    => $klantplaats
    ]);


echo "de klant is gewijzigd. <br  />";
echo "<a href='gar-menu.php'> <-- terug naar het menu";

?>
</body>
</html>