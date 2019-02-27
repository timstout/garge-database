<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-klant.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>garage read klant</h1>
<p>DIt zijn alle gegevens uit de tabel klanten in de database</p>

<?php
require_once "gar-connect.php";

$klanten = $conn->prepare("select klantid, klantnaam, klantaderes, klantposcode, klantplaats from klant");

$klanten->execute();

echo "<table>";
foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $klant["klantaderes"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $klant["klantposcode"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href= 'gar-menu.php'> <-- terug naar het menu</a>"


?>
</body>
</html>
