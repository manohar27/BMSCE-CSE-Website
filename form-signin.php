<?php
$email_id=$_POST['email_id'];
$password=$_POST['pass'];
$dbhost = "db4free.net";
$db= "bmsnews";
$user = "mbmanohars";
$pass = "manu123S";
$comm = mysql_connect($dbhost,$user,$pass);
if(!$comm){
 echo "Connection failed";
}
mysql_select_db($db);
$stmt="select * from users where email like '" . $email_id . "' and passw like '" . $password . "'";
$result= mysql_query($stmt);
if($result==NULL){
 die(mysql_error());
 }
while($line = mysql_fetch_array($result)){
 echo "<h1>"."Welcome, "  . $line['name'] . "</h1>";
 echo "<p> " ."Your username:". $line['email'] . "</p>";
}
?>