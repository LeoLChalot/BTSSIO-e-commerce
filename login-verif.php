<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<?php require_once(__DIR__ . '/includes/header.php'); ?>
<?php
$mail = htmlspecialchars($_POST['mail']);
$pwd = htmlspecialchars($_POST['pwd']);
$pwdRepeat = htmlspecialchars($_POST['pwd-repeat']);

$sth = $conn->prepare("SELECT * FROM user WHERE mail=?");
$sth->execute([$mail]);
$user = $sth->fetch();
// var_dump($user);

if ($user) {
    echo "<script>alert('Ce mail est déjà enregistré !')</script>";
} else {
    //On insère les données reçues
    if ($pwd === $pwdRepeat) {
        $pwd = SHA1($pwd);
        $sth = $conn->prepare("INSERT INTO user(mail, pwd) VALUES(:mail, :pwd)");
        $sth->bindParam(':mail', $mail);
        $sth->bindParam(':pwd', $pwd);
        $sth->execute();
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:index.php");
    } else {
        echo "<script>alert('Mot de passe erroné !')</script>";
    }
}

?>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <a class="w3-middle" href="login.php">Retour au formulaire</a>
</div>

