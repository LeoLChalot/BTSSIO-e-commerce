<!DOCTYPE html>
<html lang="fr">
<head>
    <title>e-commerce</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
        <!-- Sidebar (hidden by default) -->
        <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
        <a href="item.php" onclick="w3_close()" class="w3-bar-item w3-button">All Items</a>
        <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
    </nav>

    <!-- Top menu -->
    <div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">&#9776;</div>
            <div class="w3-right w3-padding-16">Mail</div>
            <div class="w3-center w3-padding-16"><a href="index.php"> My Shop </a></div>
        </div>
    </div>