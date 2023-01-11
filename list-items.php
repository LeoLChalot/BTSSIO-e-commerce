<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<?php require_once(__DIR__ . '/includes/header.php'); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">

        <!-- Début du parcours de ma table Catégorie (BDD e-commerce) -->
        <?php
        $id = $_GET['id'];
        $sth = $conn->prepare("SELECT * FROM item WHERE categorie_id = $id");
        $sth->execute();
        $item = $sth->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($item); $i++) :
        ?>
            <div class="w3-quarter">
                <img class="img-card" src="assets/img/item/<?= $item[$i]['image'] ?>" alt="Popsicle" style="width:100%">
                <h3><a href="list-items.php"><?= $item[$i]['name']; ?></a></h3>
                <p>Description : <?= $item[$i]['description']; ?></p>
                <p>Prix : <?= $item[$i]['price']; ?> €</p>
                <p>Statut :
                <?php if ($item[$i]['quantity'] > 0) : ?>
                    <span class="stock-vert">en stock</span> (<?= $item[$i]['quantity'] ?>)
                <?php ?>
                <form action="fonctions.php?id=<?php echo $item[$i]['id']; ?>" method="POST">
                    <button class="btn-add">+</button>
                </form>
            <?php else : ?>
                <span class="stock-rouge">rupture</span>
            <?php endif; ?></p>
            </div>
        <?php endfor;  ?>

    </div>

    <?php require_once(__DIR__ . '/includes/pagination.php'); ?>


    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
    <?php require_once(__DIR__ . '/includes/bddOff.php'); ?>