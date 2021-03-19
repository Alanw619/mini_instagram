<?php session_start();
    include __DIR__.'/../../pdo.php';
    include __DIR__.'/upload_img.php';
if(isset($_POST['username']))
{
    $username = $_POST['username'];
    if (isset($_POST['description']) && isset($_FILES['avatar'])) {
        # code...
        $description = $_POST['description'];
        $avatar = $_FILES['avatar'];
        $path_img = upload_img($avatar);
    }

    $userStatement = $pdo->prepare('SELECT * FROM users WHERE pseudo = ?');
    $userStatement->execute([$username]);
    $user = $userStatement->fetch(PDO::FETCH_ASSOC);

    if ($user === false) {


        

        $userStatement = $pdo->prepare('INSERT INTO users (pseudo, photo_profil,description_profil) VALUE (?,?,?)');
        $userStatement->execute([
            $username,
            $path_img,
            $description
        ]);
        $user_id = $pdo->lastInsertId();
        $_SESSION['id'] = $user_id;
        $_SESSION['pseudo'] = $username;
        $_SESSION['photo_profil'] = $path_img;
       header('Location: /index.php?message=Vous etes connecté');
        
    }
    else
    {
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['photo_profil'] = $user['photo_profil'];

        header('Location: /index.php?message=Vous etes connecté');
    }
}
else
    {
       header('Location: /users/login.php');
    }
?>