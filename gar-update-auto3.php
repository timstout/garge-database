<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>garage update klant 3</h1>
<p>
    Klantgegevens wijzigen in de tabel
    klant van de database garage.
</p>
<?php
// klantgegevens uit het formulier halen --------------------------
$autokenteken		= $_POST["autokentekenvak"];
$automerk 	    	= $_POST["automerkvak"];
$autotype 	        = $_POST["autotypevak"];
$autokmstand 	    = $_POST["autokmstandvak"];
$klant_id        	= $_POST["klant_idvak"];

// updaten klantgegevens ------------------------------------------
require_once "gar-connect.php";

$sql = $conn->prepare
("	
				update auto set 	autokenteken 	= :autokenteken, 
									automerk 		= :automerk,
									autokmstand 	= :autokmstand, 
									Klant_id 	    = :klant_id
									where 	autokenteken = :autokenteken
			 ");

$sql->execute
([
    "autokenteken"		=> $autokenteken,
    "automerk"		    => $automerk,
    "autotype"      	=> $autotype,
    "autokmstand"   	=> $autokmstand,
    "klant_id"	        => $klant_id
]);

echo "De klant is gewijzigd. <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>