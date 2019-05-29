<!DOCTYPE html>
<html>

<head>
    <title> docteur</title>
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
$req="SELECT * from rendezvous";
$result =$base->query($req);
?>
<table id="class1" class="table table-borderless table-dark">
<thead>
    <tr>
        <th>nom</th> <th>prenom</th> <th>date</th> <th>heure</th>
    </tr>
</thead>
<tbody>
<?php
while($donne=$result->fetchObject()){
?>
<tr>
    <td><?php 
 $lname=$donne->lname;
            echo "$lname --";  ?></td>
    <td><?php $fname=$donne->fname;
            echo "$fname --"; ?></td>
    <td><?php echo $date=$donne->date_rv;
            echo "$date"; ?></td>
    <td><?php echo $heure=$donne->heure_rv;
            echo "$heure"; ?></td>
</tr>
   
<?php   
}
?>
</tbody>
</table>
</body>
</html>