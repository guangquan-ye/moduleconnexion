<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
    <body>
        <nav>
            <div class="items">
                <ul>
                <li><a href="index.php">Accueil</a></li>
            <?php if(isset($_SESSION["user"]) && $_SESSION["user"] == "admin"): ?>
                <li><a href="admin.php">Admin</a></li>
                <form method ="get" id="deco_form">
                <div class="container1">
                <li><button type="submit" id ="decobutton" name="deco" value="deco">Deconnexion</button> 
                </div>
                </form>
                </li>
            <?php elseif(isset($_SESSION["user"])): ?>
                <li><a href="profil.php">Profil</a></li>
                <form method ="get" id="deco_form">
                <div class="container1">
                <li><button type="submit" id ="decobutton" name="deco" value="deco">Deconnexion</button>
                </div> 
                </form>
                </li>
            <?php else: ?>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.php">Connexion</a></li>
            <?php endif ?>
                </ul>
            </div>
        </nav>  
    </body>
</html>