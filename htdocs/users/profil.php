<?php

include '../partials/header.php';

?>

<div class="main-container">
    <div class="profile-content">
      <div class="profile-img">
        <img src="<?=$_SESSION['photo_profil']?>" />
        <div class="name">
          <h2><?= $_SESSION['pseudo'] ?></h2>
        </div>
      </div>

      <a href="/photo/new_photo.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

    </div>
</div>

<section>



</section>

