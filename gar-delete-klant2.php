<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>gar-delete-klant2.php</title>
</head>
<body>
<h1> garage gelete klant 2</h1>

<p>
    op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijdert kunnen worden
</p>

<?php
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn -> prepare("select klantid, klantnaam, klantaderes, klantposcode, klantplaats from klant where klantid = :klantid");

$klanten->execute(["klantid" => $klantid]);

echo "<table>";
foreach ($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant["klantid"]         ."</td>";
    echo "<td>" . $klant["klantnaam"]       ."</td>";
    echo "<td>" . $klant["klantaderes"]     ."</td>";
    echo "<td>" . $klant["klantposcode"]    ."</td>";
    echo "<td>" . $klant["klantplaats"]     ."</td>";
    echo "</tr>";
}
echo "</table><br />";

echo "<form action='gar-delete-klant3.php' method='post'>";
echo "<input type='hidden' name='klantidvak' value='$klantid'>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "deze klant verwijderen? <br />";
echo "<input type='submit'>";
echo "</form>"



?>

</body>
</html>