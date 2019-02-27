<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>gar-read-auto.php</title>
</head>
<body>
<h1>garage read auto</h1>
<p>DIt zijn alle gegevens uit de tabel auto in de database</p>

<?php
require_once "gar-connect.php";

$autos = $conn->prepare("select autokenteken, automerk, autotype, autokmstand, klant.klantnaam from auto inner join klant on auto.klant_id = klant.klantid");

$autos->execute();

echo "<table>";
foreach ($autos as $auto) {
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $auto["klantnaam"] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href= 'gar-menu.php'><--  terug naar het menu</a>"


?>
</body>
</html>
