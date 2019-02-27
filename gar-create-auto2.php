<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>gar-create-auto2</title>
</head>
<body>
<h1>garage create auto 2</h1>
<p>een auto toevoegen aan de tabel auto en de database garage</p>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fotoupload"]["name"]);
$uploadOk = 1;

$autokenteken           = $_POST["autokentekenvak"];
$automerk               = $_POST["automerkvak"];
$autotype               = $_POST["autotypevak"];
$autokmstand            = $_POST["autokmstandvak"];
$klant_id               = $_POST["klant_idvak"];


require_once'gar-connect.php';

$sql = $conn-> prepare( "insert into auto values ( :autokenteken, :automerk, :autotype,  :autokmstand, :klant_id)");

$sql-> execute(["autokenteken"         => $autokenteken,
                "automerk"             => $automerk,
                "autotype"             => $autotype,
                "autokmstand"          => $autokmstand,
                "klant_id"             => $klant_id                                     ]);


echo "de auto is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";





?>
</body>
</html>