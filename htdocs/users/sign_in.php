<?php include '../partials/header.php' ?>

<div id="container">
    <!-- zone de connexion -->

    <form action="process/process_login.php" method="POST" enctype="multipart/form-data">
        <h1>Inscription</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>


        <label><b>Description</b></label>
        <input type="text" placeholder="Description" name="description">

        <label><b>Photo de profil</b></label>
        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password">

        <input type="submit" id='submit' value='LOGIN'>
        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
<script src="script.js"></script>
</body>

</html>