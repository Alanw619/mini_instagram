<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/style.css">
    <title>Mini Instagram</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper #ff5722 deep-orange">
            <a href="/index.php" class="brand-logo">Inst@gray</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php if($_SESSION){?>
                    <li><input type="search" placeholder="Chercher un profil"></li>
                    <li><a href="/users/profil.php">Profil</a></li>
                    <li><a href="/users/disconnect.php">Deconnexion</a></li>
                <?php }else{?>
                    <li><input type="search" placeholder="Chercher un profil"></li>
                    <li><a href="/users/login.php">Connexion</a></li>
                    <li><a href="/users/sign_in.php">Inscription</a></li>
                <?php }?>
                    
            </ul>
        </div>
    </nav>
