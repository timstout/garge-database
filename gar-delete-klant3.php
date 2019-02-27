<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <title>gar-klant-delete-klant3</title>
</head>
<body>
<h1>garage delete klant 3</h1>

<p>op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijdert kunnen worden</p>



<?php
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];

if ($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare("delete from klant where klantid = :klantid");



    $sql->execute(["klantid" => $klantid]);

    echo "de gegevens zijn verwijdert <br />";

}
else{
    echo "de gegevens zijn niet verwijdert <br />";
}



echo "<a href='gar-menu.php'> <--  terug naar het menu </a>"

?>

</body>
</html>