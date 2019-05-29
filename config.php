<?php
function connect(){
    $server="localhost";
$base="stage";
$username="root";
$pass="";
try {
    //code de cnx
    $con= new PDO("mysql:host=$server;dbname=$base",$username,$pass); // variable qui va nous connecter a la BD
return $con;

} catch (PDOException $e){
    //exception 
    //  $e contient non seulement le nom de l'exception  mais pluiseurs autre chose
    die("Error:".$e->getMessage()); // twa9ef kol chay ou yorej msg d'erreur
}
}
?>