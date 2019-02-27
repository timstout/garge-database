<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-search-auto2.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>garage zoek op kentekenen 2</h1>
<p>op kenteken gegevens zoeken uit de tabel auto van de database garage</p>

<?php

require_once "gar-connect.php";



$autokenteken = $_POST["autokentekenvak"];



$autos = $conn->prepare ("select autokenteken, automerk, autotype, autokmstand, klant.klantnaam from auto inner join klant where auto.klant_id = klant.klantid and autokenteken = :autokenteken");

$autos->execute(["autokenteken" => $autokenteken]);


echo "<table>";
foreach ($autos as $auto) {
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>";
    echo "<td>";
    echo "<td>" . $auto["klantnaam"] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href= 'gar-menu.php'> <-- terug naar het menu</a>"




?>
</body>
</html>