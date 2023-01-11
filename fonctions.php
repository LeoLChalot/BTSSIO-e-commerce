<?php require_once(__DIR__ . '/includes/bddConn.php'); ?>
<!-- <?php require_once(__DIR__ . '/includes/header.php'); ?> -->

<?php
$id = $_GET['id'];
// var_dump($id);

function addItem($id, $conn)
{

    $sth = $conn->prepare("SELECT quantity, categorie_id FROM item WHERE id = $id");
    $sth->execute();

    $itemQuantity = $sth->fetchAll(PDO::FETCH_ASSOC);
    var_dump($itemQuantity);
    $categorie_id = $itemQuantity[0]['categorie_id'];
    $itemQuantity = intval($itemQuantity[0]['quantity']);
    var_dump($itemQuantity);

    $itemQuantity = $itemQuantity + 1;
    var_dump($itemQuantity);

    

    $sth = $conn->prepare("UPDATE item SET quantity = $itemQuantity WHERE id = $id");
    $sth->execute();
    // echo "item ++";
    header("Location:list-items.php?id=$categorie_id");
}

addItem($id, $conn);













?>

<?php require_once(__DIR__ . '/includes/footer.php'); ?>
<?php require_once(__DIR__ . '/includes/bddOff.php'); ?>