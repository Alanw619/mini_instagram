<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=mini_instagram", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo 'Error!: ',$e->getMessage(),'<br />'; 
    die(); 
}