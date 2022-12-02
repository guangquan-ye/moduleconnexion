<?php
 
$insc="";
include "connect.php";
// $mysqli = new mysqli('localhost', 'root', 'root', 'moduleconnexion');
$mysqli = new mysqli('localhost', 'shinz', 'Azerty!123a', 'moduleconnexion');
if(isset($_POST['edit'])&& $_POST['pass']==$_POST['repass'] && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty ($_POST['pass'])){
    $id=$_SESSION['userID'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];

    $update = "UPDATE utilisateurs SET nom='$nom', prenom='$prenom', password='$pass' WHERE id=$id";
    $request = $mysqli->query($update);
    $insc="Modification effectuer" ;
}
else{
    $insc= "Information vide ou incorrect";
}

    $request = $mysqli->query("SELECT * FROM utilisateurs WHERE id = '$_SESSION[userID]'");
    $result=$request->fetch_all();


    
       
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <div class="fondprofil">
    <?php include 'header.php' ?>
    <div class="main">
            <div class="formulaire">
            
                
                
                
                <form method="post">
                <h1>Bienvenue <?php echo $_SESSION["user"] ?></h1>
                <h2>Pour modifier votre profil</h2>
                <div class="msg"><center><?php echo $insc ?></center></div>
                <div class="box">
                <label for="prenom">Prenom</label>
                <br>
                <input type="text" name="prenom" placeholder="<?php echo $result[0][2] ?>">
                </div>
                <br>
                <div class="box">
                <label for="nom">Nom</label>
                <br>
                <input type="text" name="nom" placeholder="<?php echo $result[0][3] ?>">
                </div>
                <br>
                <div class="box">
                <label for="mdp">Nouveau mot de passe</label>
                <br>
                <input type="password" name="pass" placeholder="Nouveau mot de passe">
                </div>
                <br>
                <div class="box">
                <label for="confirm">Confirmer le nouveau mot de passe</label>
                <br>
                <input type="password" name="repass" placeholder="Confirmer nouveau mot de passe">
                </div>
                <br>
                <div class="button">
                <button type="submit" id="buttoninsc" name="edit">Modifier</button>
                </div>
            </div>
    </div>

    <?php include 'footer.php' ?>
</div>

   
</body>
</html>