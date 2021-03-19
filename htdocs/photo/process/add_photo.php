<?php session_start();
include __DIR__.'/../../pdo.php';
include __DIR__.'/../../users/process/upload_img.php';


if (isset($_FILES['photo'])) {
    
    $pdoStatement = $pdo->prepare(
        'INSERT INTO photos (path_photo,likes,commentaires,user_id) VALUE (?,?,?,?)');
    $pdoStatement->execute([
        upload_img($_FILES['photo']),
        0,
        0,
        $_SESSION['id']
        
    ]);
            
}