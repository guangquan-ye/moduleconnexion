<?php
include "connect.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <div class="fondconn">
    <?php include 'header.php' ?>
           
       
    <?php 
    if (isset($_POST["submit"]) && $check==1){
        header('Location: '. "index.php"); 
        
    }
    if(isset($_POST["submit"]) && $check==0 || !isset($_POST["submit"])){
    }
    if(isset($_SESSION["user"]) && $_SESSION["user"] == "admin"){
        header('Location: '. "admin.php"); 
    }

    ?>    
        <div class="main">
            <div class="formulaire">
            
                    
                    
                <form method="post">
                    <h2 id="h2co">Connexion</h2>
                    <div class="msg"><center><?php echo $msg ?></center></div>
                    <br>
                    <div class="box">
                        <label>Login</label>
                        <br>
                        <input type="text" name="login" placeholder="Login">
                    </div>
                    <br>
                    <div class="box">
                        <label>Mot de passe</label>
                        <br>
                        <input type="password" name="password" placeholder="Mot de passe">
                    
                     </div>
                     <br>
                     <div class="container">
                    <button id="buttonco" type="submit" name="submit">Connexion</button>
                    </div>
                    <br>
                    <span><a href="inscription.php">Pas encore inscrit ?</a></span>
                </form>
            </div>
    
            
        </div>
        <?php include 'footer.php' ?>
    
    


</div>
    

    

    
</body>
</html>