<?php
echo"Upanshu";
// Setcookie(name,value,expire,path,domain)
$_COOKIE_name="User";
$_COOKIE_value="Yahoo";
setcookie($_COOKIE_name,$_COOKIE_value,time()+(86400),"/");
// echo"Cookie is set";
?>
<html>

<body>
    <?php
    if(!isset($_COOKIE[$_COOKIE_name]))
    {
        echo"cookie is not set";
    }
    else{
    echo $_COOKIE[$_COOKIE_name];
    }
    ?>
</body>
</html>