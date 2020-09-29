<?php
 require_once('connection.php');  

 

 if(isset($_POST['submit'])){
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email= $_POST['email'];  
  $pwd= $_POST['pwd'];
  $confirm= $_POST['confirm'];

   $pwd= sha1($pwd);
   $confirm= sha1($confirm);
   
   $sql= "INSERT INTO 'register'(fname, lname,email,pwd,confirm)VALUES ('$fname','$lname','$email','$pwd','$confirm')";

  InsertData($sql);
}
 
?>




