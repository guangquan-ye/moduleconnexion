<?php
   try{
   // $pdo=new PDO("mysql:host=localhost;dbname=moduleconnexion","root","root");
   $pdo=new PDO("mysql:host=localhost;dbname=guangquan-ye_moduleconnexion","shinz","Azerty!123a");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>
<?php
    include("connect.php");
   @$login=$_POST["login"];
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$pass=$_POST["password"];
   @$repass=$_POST["confirm"];
   @$valider=$_POST["submit"];
   $erreur="";
   $succes="";
   if(isset($valider)){
      if(empty($login)) $erreur="Login laissé vide!";
      elseif(empty($nom)) $erreur="Nom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($login)) $erreur="Login laissé vide!";
      elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
      elseif($pass!=$repass) $erreur= "Mots de passe non identiques!";
      else{
        
      $sel=$pdo->prepare("select login from utilisateurs where login=? limit 1");
      $sel->execute(array($login));
      $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur = "Login existe déjà!";
         else{
            $ins=$pdo->prepare("insert into utilisateurs(login,nom,prenom,password) values(?,?,?,?)");
            if($ins->execute(array($login,$nom,$prenom,$pass)))
               header('Location: '. "index.php"); 
               $succes = "Compte créé !" ;
            }   
      }
   }


?>