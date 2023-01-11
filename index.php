<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<?php require_once(__DIR__ . '/includes/header.php'); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">

        <!-- Début du parcours de ma table Catégorie (BDD e-commerce) -->
        <?php
        // $userPseudo = "admin";
        // $userPassword = sha1('admin');
        // $sth = $conn->prepare("INSERT INTO user(pseudo, password) VALUES(:pseudo, :password)");
        // $sth->bindParam(':pseudo', $userPseudo);
        // $sth->bindParam(':password', $userPassword);
        // $sth->execute();


        $sth = $conn->prepare("SELECT * FROM categorie");
        $sth->execute();
        $fetch = $sth->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($fetch);
        for ($i = 0; $i < count($fetch); $i++) :
        ?>
            <div class="w3-quarter">
                <img class="img-card" src="assets/img/categorie/<?= $fetch[$i]['image'] ?>" alt="Popsicle" style="width:100%">
                <h3>
                    <!-- Id catégorie à récupérer avec GET_['id'] -->
                    <a href="list-items.php?id=<?php echo $fetch[$i]['id']; ?>&categorie=<?php echo $fetch[$i]['name']; ?>">
                        <?= $fetch[$i]['name']; ?>
                    </a>
                </h3>
            </div>
        <?php endfor;  ?>
    </div>
</div>
<?php require_once(__DIR__ . '/includes/pagination.php'); ?>
<?php require_once(__DIR__ . '/includes/footer.php'); ?>
<?php require_once(__DIR__ . '/includes/bddOff.php'); ?>