<?php include 'inscriptionquery.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
  
</head>
<body>
    <div class="fondinsc">
    <?php include 'header.php' ?>
    

        <div class="main">
            <div class="formulaire">
            
                
                <form method="post">
                <h2 id="h2insc">Pour vous inscrire</h2>
                
                <div class="msg"><center><?php echo $erreur ?></center></div>
                <br>
                
                <div class="box">
                
                <input type="text" name="login" placeholder="Login">
                </div>
                <br>
                <div class="box">
                
                <input type="text" name="nom" placeholder="Nom">
                </div>
                <br>
                <div class="box">
                
                <input type="text" name="prenom" placeholder="Prenom">
                </div>
                <br>
                <div class="box">
                
                <input type="password" name="password" placeholder="Mot de passe">
                </div>
                <br>
                <div class="box">
                
                <input type="password" name="confirm" placeholder="Confirmer mot de passe">
                </div>
                <br>
                <div class="container">
                <button type="submit" id ="buttoninsc" name="submit">Inscription</button>
                </div>
            </div>
        </div>


    <footer>
    <?php include 'footer.php' ?>
    </footer>
</div>
</body>
</html>