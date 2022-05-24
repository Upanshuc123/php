<?php
echo"Upanshu";
// calling by user
echo"Cookie value :".$_COOKIE["User"];
// delete
setcookie("User"," ",time()-(86400),"/");
?>