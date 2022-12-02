<?php $mysqli = new mysqli('localhost', 'root', 'root', 'moduleconnexion');
$msg="";
if(session_id() == ''){
    session_start();
}

$check = 0;
if (isset($_POST["submit"])){
    $request = $mysqli->query("SELECT * FROM utilisateurs");
    $result=$request->fetch_all();
    
    for ($i=0 ; isset($result[$i]) ; $i++){
        if ($result[$i][1]==$_POST["login"] && $result[$i][4] == $_POST["password"]){
            $_SESSION['userID'] = $result[$i][0];   
        $check = 1;
        
        } 
    } 
    if($check == 0){
        $msg = "Information incorrect";
    }
    elseif($check==1){
    $_SESSION["user"] = $_POST["login"] ;
    $msg ="Bienvenue " . $_POST["login"] ;
    }
}
if(isset($_GET["deco"])){
    session_destroy();
    header('Location: '. "connexion.php"); 
}
?>
