<?php
    //include
    include "connection.php";
    $id= $_GET["id"];
    echo $id;
    //appel fonction
    $base =connect();
    $req="DELETE FROM demande WHERE id_demande='".$_GET['id']."'";
    $result =$base->query($req);
    $resp= $base->exec($req) ;
    header("Location: sec.php");

?>