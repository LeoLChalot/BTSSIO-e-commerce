<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<?php require_once(__DIR__ . '/includes/header.php'); ?>
<!-- !PAGE CONTENT! -->
<<<<<<< HEAD
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <form action="login-verif.php" method="POST">
        <div class="w3-container">
            <h1>Inscription</h1>
            <p>Saisissez vos information pour créer votre compte.</p>
            <hr>
            <input type="text" placeholder="Enter mail" name="mail" id="mail" required>
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>
            <input type="password" placeholder="Repeat Password" name="pwd-repeat" id="pwd-repeat" required>
            <button type="submit" class="registerbtn">Register</button>
        </div>
=======
<div class="w3-display-middle w3-padding w3-col 8 m4">
    <form class="w3-container" action="login.php" method="POST">
        <label class="w3-text-blue"><b>Pseudo</b></label>
        <input class="w3-input w3-border w3-margin" for="pseudo" type="text" required>
        <label class="w3-text-blue"><b>Mot de passe</b></label>
        <input class="w3-input w3-border w3-margin" for="pwd" type="password" required>
        <button class="w3-btn w3-blue w3-margin" type="submit">login</button>
>>>>>>> a6f9fd05a75a2e2ee90912a9afcf531ea2bb8f59
    </form>




</div>

<<<<<<< HEAD
=======
<?php
if (isset($_POST['submit'])) {
    $pseudo = $_POST['pseudo'];
    $pwd = $_POST['pwd'];
    // check if user is registered
    $sth = $conn->prepare("SELECT * FROM user WHERE pseudo = $pseudo AND pwd = $pwd");
    $sth->execute();
    $fetch = $sth->fetchAll(PDO::FETCH_ASSOC);
    if (count($fetch) > 0) {
        header('Location:index.php');
    } else {
        echo "pas enregistré";
    }
}
?>


>>>>>>> a6f9fd05a75a2e2ee90912a9afcf531ea2bb8f59


<?php require_once(__DIR__ . '/includes/footer.php'); ?>
<?php require_once(__DIR__ . '/includes/bddOff.php'); ?>