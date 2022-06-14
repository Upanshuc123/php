<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="REQUEST">
        NAME:<input type="text" name="name">
        <br>
        <br>
        Rollno:<Input type="text" name="rollno">
        <br>
        <br>
        contact:<Input type="number" name="rollno">
        <br>
        <br>
        enrollno:<Input type="number" name="rollno">
        <br>
        <br>
        address:<Input type="text" name="rollno">
        <br>
        <br>
        <input type="submit" name="login">
        <br>
</form>
</body>
</html>

<?php
if(isset($_POST['SUBMIT']))
{
    echo $_POST['NAME'];
    echo $_POST['LASTNAME'];
    echo $_POST['COURSE'];
    echo $_POST['PHONE'];
}
?>


<script>
    alert('')
       <?php
       // Setcookie(name,value,expire,path,domain)
       $_COOKIE_name="User";
       $_COOKIE_value="Yahoo";
       setcookie($_COOKIE_name,$_COOKIE_value,time()+(86400),"/");
       // echo"Cookie is set";
       
// calling by user
echo"Cookie value :".$_COOKIE["User"];
// delete
setcookie("User"," ",time()-(86400),"/");
?>
</script>