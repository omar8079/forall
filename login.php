<?php
$conn=mysqli_connect('localhost','root','root','omar');
$firstname=  $_POST['firstname'];
$lastname=  $_POST['lastname'];
$email=  $_POST['email'];
if(isset($_POST['submit'])){
echo $firstname.' '.$lastname.' '.$email;}
if(!$conn){
  echo'sucsess';
}

?>
<!DOCTYPE html>
<html lang="en"> 
 <head> 
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE-edge">
 <meta charset="UTF-8">
 <meta charset="UTF-8">
 <form action="login.php" method="post">
    <input type="text" name="firstname" id="firstname" placeholder="first name">
    <input type="text" name="lastname" id="lastname" placeholder="last name">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="submit" name="submit" value="send">
</form>
 </head>
 <body>

 </body>
 </html>