<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<?php require_once(__DIR__ . '/includes/header.php'); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-display-middle w3-padding w3-col 8 m4">
    <form class="w3-container" action="login.php" method="POST">

        <label class="w3-text-blue"><b>Pseudo</b></label>
        <input class="w3-input w3-border w3-margin" for="pseudo" type="text" required>

        <label class="w3-text-blue"><b>Mot de passe</b></label>
        <input class="w3-input w3-border w3-margin" for="pwd" type="password" required>

        <button class="w3-btn w3-blue w3-margin" type="submit">login</button>

    </form>
</div>

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




<?php require_once(__DIR__ . '/includes/bddOff.php'); ?>