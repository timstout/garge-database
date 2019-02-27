<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-search-klant2.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>garage zoek op klantid 2</h1>
<p>op klantid gegevens zoeken uit de tabel klanten van de database garage</p>

<?php

require_once "gar-connect.php";



$klantid = $_POST["klantidvak"];



$klanten = $conn->prepare ("select klantid, klantnaam, klantaderes, klantposcode, klantplaats from klant where klantid = :klantid");

$klanten->execute(["klantid" => $klantid]);


echo "<table>";
foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantaderes"] . "</td>";
    echo "<td>" . $klant["klantposcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href= 'gar-menu.php'> <--  terug naar het menu</a>"




?>
</body>
</html>