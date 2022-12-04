<?php

include "connect.php" ;

$request = $mysqli->query('SELECT  *  FROM utilisateurs ');

$result=$request->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<?php if (!isset($_SESSION["user"]) || $_SESSION["user"] != "admin"): ?>
    <div class="fondnotadmin">
        <?php include 'header.php' ?>
            <div class="midnotadmin">
                <img src="https://media.giphy.com/media/3o7aTskHEUdgCQAXde/giphy.gif">
                <br>
                <div class="msgnotadmin">THIS IS NOT THE PAGE YOU'RE LOOKING FOR</div>
            </div> 
        <?php include 'footer.php' ?>
        
    </div>
    <?php else: ?>
        <div class="fondadmin">
            <?php include 'header.php' ?>
            <section>
                <h1>Bienvenue sur votre page ADMIN</h1>
                <br>
                <h2>Base de Données</h2>
                <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                <th>id</th>
                <th>login</th>
                <th>nom</th>
                <th>prenom</th>
                <th>mot de passe</th>
                </tr>
                </thead>
                </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <?php
                            for ($i=0 ; isset($result[$i]) ; $i++){
                                echo "<tr>" ;
                                for($j=0 ; isset($result[$i][$j]) ; $j++){
                                    echo  "<td>" . ($result[$i][$j]) . "</td>" ;
                                }
                                echo "</tr>" ;
                            }
                            ?> 
                        </tbody>
                    </table>
                </div>
            </section>
            <?php include 'footer.php' ?>
        </div>
    <?php endif ?>
</body>
</html>