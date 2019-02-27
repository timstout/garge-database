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
$autokenteken = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$autos = $conn -> prepare("select autokenteken, automerk, autotype, autokmstand, klant_id from auto where autokenteken = :autokenteken");

$autos->execute(["autokenteken" => $autokenteken]);

echo "<table>";
foreach ($autos as $auto){
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"]         ."</td>";
    echo "<td>" . $auto["automerk"]       ."</td>";
    echo "<td>" . $auto["autotype"]     ."</td>";
    echo "<td>" . $auto["autokmstand"]    ."</td>";
    echo "<td>" . $auto["klant_id"]     ."</td>";
    echo "</tr>";
}
echo "</table><br />";

echo "<form action='gar-delete-auto3.php' method='post'>";
echo "<input type='hidden' name='autokentekenvak' value='$autokenteken'>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "deze auto verwijderen? <br />";
echo "<input type='submit'>";
echo "</form>"



?>

</body>
</html>