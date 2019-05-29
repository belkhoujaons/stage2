<?php
include "config.php";

$base=connect();

//recuperation des donnees

if(isset($_POST["nom"])&&isset($_POST["prenom"])&&isset($_POST["phone"])&&isset($_POST["email"]) &&isset($_POST["password"])) 
{ 
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"]; 
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    $req="INSERT INTO users(fname,lname,phone,email,pass) VALUES ('$nom','$prenom','$phone','$email','$password')";
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