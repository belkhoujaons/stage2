<?php
    //include
    include "connection.php";
    //appel fonction
    $base =connect();
    $id=$_GET["id"];
    $req="INSERT INTO rendezvous (date_rv,name,id_urv) SELECT date_d,name,id_u FROM demande WHERE id_demande='".$_GET["id"]."'";
    $result =$base->query($req);
    $resp= $base->exec($req) ;
    $req="DELETE FROM demande WHERE id_demande='".$_GET['id']."'";
    $result =$base->query($req);
    $resp2= $base->exec($req) ;
    if($resp==1){
        header("Location: sec.php");
    }
    else{
        echo"bara thabet fel code"; 
    }

?>