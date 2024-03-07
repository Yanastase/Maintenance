
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Upload de Fichier</title>
</head>
<body  style="background-color:rgb(47,79,79);">
<div style="background-image: linear-gradient(to top, #fff0 0%, #fff 100%);padding: 100px;display: inline-block;margin-left: auto;" >
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionnez un fichier :</label>
    <br>
    <input type="file" name="file" id="file">
    <br>
    <input type="submit" name="submit" value="Envoyer">
</form>
</div>

</body>
</html>
