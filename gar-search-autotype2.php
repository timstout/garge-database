<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-search-autotype2.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>garage zoek op type 2</h1>
<p>op kenteken gegevens zoeken uit de tabel auto van de database garage</p>

<?php

require_once "gar-connect.php";



$autotype = $_POST["autotypevak"];



$autos = $conn->prepare ("select autokenteken, automerk, autotype, klant.klantnaam, klant.klantaderes, klant.klantposcode, klant.klantplaats from auto inner join klant  where autotype = :autotype and klant.klantid=auto.klant_id");

$autos->execute(["autotype" => $autotype]);


echo "<table>";
foreach ($autos as $auto) {
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $auto["klantnaam"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $auto["klantaderes"] . "</td>";
    echo "<td>" . $auto["klantposcode"] . "</td>";
    echo "<td>" . $auto["klantplaats"] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href= 'gar-menu.php'> <--  terug naar het menu</a>"




?>
</body>
</html>