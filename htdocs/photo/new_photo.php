<?php include '../partials/header.php' ?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Ajouter une photo</title>
</head>

<body>
    <form action="process/add_photo.php" method="POST" name="formulaire" enctype="multipart/form-data">
        <div>
            <h5> Insérer une image</h5>
            <br>
            <input type="file" name="photo" id="photo" />
            <br>
            <br>
            <button type="submit">ENVOYER</button>
        </div>
    </form>

</body>

</html>