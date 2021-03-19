<?php include __DIR__ . '/partials/header.php'; 

if(isset($_GET['message'])){
    echo $_GET['message'];
}

?>

<h1>Page d'acceuil</h1>

<?php include __DIR__ . '/partials/footer.php'; ?>