<?php require_once(__DIR__ . '/includes/header.php');?>
    <!-- Sidebar (hidden by default) -->
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
        <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    </nav>

    <!-- Top menu -->
    <div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">&#9776;</div>
            <div class="w3-right w3-padding-16">Mail</div>
            <div class="w3-center w3-padding-16">My Shop</div>
        </div>
    </div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

        <!-- Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center">

            <!-- Début du parcours de ma table Catégorie (BDD e-commerce) -->
            <?php 
            $sth = $conn->prepare("SELECT * FROM categorie");
            $sth->execute();
            $fetch = $sth->fetchAll(PDO::FETCH_ASSOC);
            for($i = 0; $i < count($fetch); $i++):
            ?>
            <div class="w3-quarter">
                <img class="img-card" src="assets/img/<?= $fetch[$i]['image'] ?>" alt="Popsicle" style="width:100%">
                <h3>
                    <a href="list-items.php?page=<?php echo $fetch[$i]['id']; ?>&id=<?php echo $fetch[$i]['id']; ?>">
                    <?= $fetch[$i]['name']; ?>
                    </a>
                </h3>
            </div>
            <?php endfor;  ?>

        </div>

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">&laquo;</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">&raquo;</a>
            </div>
        </div>

        <hr id="about">

        <!-- About Section -->
        <div class="w3-container w3-padding-32 w3-center">
            <h3>About Me, The Food Man</h3><br>
            <img src="assets/img/me.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="450" height="300">
            <div class="w3-padding-32">
                <h4><b>I am Who I Am!</b></h4>
                <h6><i>With Passion For Real, Good Food</i></h6>
                <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            </div>
        </div>
<?php require_once(__DIR__ . '/includes/footer.php');?>