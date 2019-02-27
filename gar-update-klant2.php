<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>gar-update-klant2.php</title>
</head>
<body>
<h1>garage update klant 2</h1>
<p>
    dit formulier wordt gebruikt om klantgegevens te wijzergen in de tabel klant van de database garage
</p>


<?php
require_once "gar-connect.php";

$klantid = $_POST["klantidvak"];



$klanten = $conn->prepare("select klantid, klantnaam, klantaderes, klantposcode, klantplaats, klantplaats from klant where klantid = :klantid");

$klanten->execute(["klantid" => $klantid]);

echo "<form action='gar-update-klant3.php' method='post'>";
foreach ($klanten as $klant){
    echo "klantid:" .$klant["klantid"];
    echo "<input type='hidden' name='klantidvak' ";
    echo "value=' " .$klant["klantid"]."'> <br  />";

    echo "klantnaam: <input type='text'";
    echo "name = 'klantnaamvak'";
    echo "value = '" .$klant["klantnaam"]. "'> <br  />";

    echo "klantaderes: <input type='text'";
    echo "name = 'klantaderesvak'";
    echo "value = '" .$klant["klantaderes"]. "'> <br  />";

    echo "klantposcode: <input type='text'";
    echo "name = 'klantposcodevak'";
    echo "value = '" .$klant["klantposcode"]. "'> <br  />";

    echo "klantplaats: <input type='text'";
    echo "name = 'klantplaatsvak'";
    echo "value = '" .$klant["klantplaats"]. "'> <br  />";
}

echo "<input type='submit'>";
echo "</form>";



?>

</body>
</html>