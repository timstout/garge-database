<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <title>gar-delete-auto3</title>
</head>
<body>
<h1>garage delete auto 3</h1>

<p>op autokenteken gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijdert kunnen worden</p>



<?php
$autokenteken = $_POST["autokentekenvak"];
$verwijderen = $_POST["verwijdervak"];

if ($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare("delete from auto where autokenteken = :autokenteken");

    $sql->execute(["autokenteken" => $autokenteken]);

    echo "de gegevens zijn verwijdert <br />";

}
else{
    echo "de gegevens zijn niet verwijdert <br />";
}

echo "<a href='gar-menu.php'> <--  terug naar het menu </a>"

?>

</body>
</html>