<?php
require_once(__DIR__ . '/includes/bddConn.php');
$mail = htmlspecialchars($_POST['mail']);
$pwd = htmlspecialchars($_POST['pwd']);
$pwdRepeat = htmlspecialchars($_POST['pwd-repeat']);

if($pwd != $pwdRepeat){
    echo "<script>alert('Mauvais mot de passe !');</script>";
}

//On insère les données reçues
if ($pwd === $pwdRepeat) {
    $pwd = SHA1($pwd);
    $sth = $conn->prepare("INSERT INTO user(mail, pwd) VALUES(:mail, :pwd)");
    $sth->bindParam(':mail', $mail);
    $sth->bindParam(':pwd', $pwd);
    $sth->execute();
    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:index.php");
}

?>