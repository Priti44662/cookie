<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>



<?php
setcookie("user1","rishu");
?>


<?php

if(!isset($_COOKIE['user1'])) {
   echo "cookie named is not set!";
   }else{
     echo "cookie'"."user" . "'is set!<br>";
	 echo "Value is: ". $_COOKIE['user1'];
	 }
	 ?>
	 
	 <body>
	 </body>
</html>
