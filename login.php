<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<?php require_once(__DIR__ . '/includes/header.php'); ?>
<!-- !PAGE CONTENT! -->
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
    </form>




</div>



<?php require_once(__DIR__ . '/includes/footer.php'); ?>
<?php require_once(__DIR__ . '/includes/bddOff.php'); ?>