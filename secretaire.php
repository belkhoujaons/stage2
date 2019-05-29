<!DOCTYPE html>
<html>

<head>
    <title> secretaire</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
//include
include "config.php";
//appel fonction
$base =connect();
$req="SELECT * from demande";
$result =$base->query($req);
?>
<table id="class1" class="table table-borderless table-dark">
<thead>
    <tr>
        <th>nom</th> <th>prenom</th> <th>date</th>
    </tr>
</thead>
<tbody>
<?php
while($donne=$result->fetchObject()){
?>
<tr>
    <td><?php 
 $lname=$donne->lname;
 $id=$donne->id_demande;
            echo "$lname ";  ?></td>
    <td><?php $fname=$donne->fname;
            echo "$fname "; ?></td>
    <td><?php echo $date=$donne->date_d;
            ?></td>
    <td><input type="button" value="valider" class="btn btn-success"></td>
    <td><input type="button" value="supp" class="btn btn-danger"></td>
</tr>
   
<?php   
}
?>
</tbody>
</table>

</body>
</html>