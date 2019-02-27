<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto2.php</title>
</head>
<body>
<h1>garage update auto 2</h1>
<p>
    dit formulier wordt gebruikt om autogegevens te wijzergen in de tabel auto van de database garage
</p>


<?php
require_once "gar-connect.php";

$autokenteken = $_POST["autokentekenvak"];



$autos = $conn->prepare("select * from auto where autokenteken = :autokenteken");

$autos->execute(["autokenteken" => $autokenteken]);

echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto){
    echo "autokenteken:" .$auto["autokenteken"];
    echo "<input type='hidden' name='autokentekenvak' ";
    echo "value=' " .$auto["autokenteken"]."'";
    echo " > <br  />";

    echo "automerk: <input type='text'";
    echo "name = 'automerkvak'";
    echo "value = '" .$auto["automerk"]. "'";
    echo "> <br  />";

    echo "autotype: <input type='text'";
    echo "name = 'autotypevak'";
    echo "value = '" .$auto["autotype"]. "'";
    echo "> <br  />";

    echo "autokmstand: <input type='text'";
    echo "name = 'autokmstandvak'";
    echo "value = '" .$auto["autokmstand"]. "'";
    echo "> <br  />";

    echo "klant_id: <input type='text'";
    echo "name = 'klant_idvak'";
    echo "value = '" .$auto["klant_id"]. "'";
    echo "> <br  />";
}

echo "<input type='submit'>";
echo "</form>";



?>

</body>
</html>