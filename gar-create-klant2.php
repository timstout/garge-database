<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>gar-create-klant2</title>
</head>
<body>
<h1>garage create klnat 2</h1>
<p>een klant toevoegen aan de tabel klant en de database garage</p>
<?php

$klantid            = NULL;
$klantnaam          = $_POST["klantnaamvak"];
$klantadres         = $_POST["klantadresvak"];
$klantposcode       = $_POST["klantpostcodevak"];
$klantplaats        = $_POST["klantplaatsvak"];


require_once'gar-connect.php';

$sql = $conn-> prepare( "insert into klant values ( :klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats )");

$sql ->bindParam(":klantid", $klantid);
$sql ->bindParam(":klantnaam", $klantnaam);
$sql ->bindParam(":klantadres", $klantadres);
$sql ->bindParam(":klantpostcode", $klantposcode);
$sql ->bindParam(":klantplaats", $klantplaats);

$sql-> execute();

echo "de klnat is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";





?>
</body>
</html>