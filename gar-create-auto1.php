<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <title>gar-create-auto1.php</title>
</head>
<body>
<h1>garage create auto 1</h1>
<p>dit formulier wordt gebruikt om autogegevens in te voeren </p>

<form action="gar-create-auto2.php"  method="post" enctype="multipart/form-data">
    klantid:        <input type="text" name="klant_idvak"           <br /> <br />
    autokenteken:   <input type="text"  name="autokentekenvak">     <br />
    automerk:       <input type="text"  name="automerkvak">         <br />
    autotype:       <input type="text"  name="autotypevak">         <br />
    autokmstand:    <input type="text"  name="autokmstandvak">      <br />
    foto            <input type="file" name="fotoupload">           <br />
    <input type="submit">
</form>
</body>
</html>