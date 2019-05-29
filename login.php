<?php  
 

 include "config.php";
 
 
 $base=connect();
 
 //recuperation des donnees
 if(isset($_POST['email']) && $_POST['password'] ){
 $email=$_POST['email'];
 $password=$_POST['password'];}
 
 
 $test=0;
 
 $req="SELECT * FROM users where email ='$email' ";
 $result=$base->query($req);
 
 while($user=$result->fetchObject())  
 {
     $test=1;
     if($user->pass==$password)
     {    
         echo"success";
         if($email=="docteur@gmail.com")
         {header('Location: docteur.html');}
         else if($email=="secretaire@gmail.com")
         {header('Location: secretaire.php');}
         else{
         header('Location: client.html');
         }
         exit;
     }
     else
         echo "incorrect password";
 }
 
 if(!$test)
     echo"verify your email";
 
 ?>
