<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<?php require_once(__DIR__ . '/includes/header.php'); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <div class="w3-row-padding w3-padding-16 w3-center">
        <!-- Début du parcours de ma table Catégorie (BDD e-commerce) -->
        <?php
        $sth = $conn->prepare("SELECT * FROM item");
        $sth->execute();
        $fetch = $sth->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($fetch); $i++) :
        ?>
            <div class="w3-quarter">
                <img class="img-card" src="assets/img/item/<?= $fetch[$i]['image'] ?>" alt="Popsicle" style="width:100%">
                <h3><?= $fetch[$i]['name'] ?></h3>
            </div>
        <?php endfor;  ?>
    </div>
</div>
<?php require_once(__DIR__ . '/includes/footer.php'); ?>