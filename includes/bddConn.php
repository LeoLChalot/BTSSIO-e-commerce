<?php
$servername = "localhost";
$dbname = "e-commerce";
$username = "root";
$password = "";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion ok";
    $conn->beginTransaction();
} catch (PDOException $e) {
    $conn->rollBack();
    echo "Erreur : " . $e->getMessage();
}
?>