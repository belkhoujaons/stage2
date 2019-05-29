<?php
include "config.php";

$base=connect();

//recuperation des donnees

if(isset($_POST["nom"])&&isset($_POST["prenom"])&&isset($_POST["d"])) 
{ 
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"]; 
    $d=$_POST["d"];
    
    
    $req="INSERT INTO demande(fname,lname,date_d) VALUES ('$nom','$prenom','$d')";
    $resp=$base->exec($req);
    if($resp==1)
    {
        echo"données insérées avec succees";
        header('Location: client.html');
        exit;
    }
    else
    {
        echo "erreur dinsertion: verifier la req ou le fichier ";  
    }


    
}
    
?>