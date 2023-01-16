<?php
session_start();


$username = "t5";
$password = "just4fun";


if ($_POST["username"] == $username && $_POST["pw"] == $password ){


$_SESSION["username"] = htmlspecialchars($_POST["username"]);
$_SESSION["pw"] = htmlspecialchars( $password);

header("Location:task1.php?");

} else if ($_POST["username"]!= $username && $_POST["pw"] != $password){
    echo "<p class= 'error'> Incorrect Username and Password</p>";
    session_destroy();
} else if ($_POST["username"]!= $username){
    echo "<p class= 'error'> Incorrect Username</p>";
    session_destroy();
}else if ($_POST["pw"] != $password){
    echo "<p class= 'error'> Incorrect Password</p>";
    session_destroy();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>

</style>    
  
</head>
<body>
 <?php include "menu.php"?> 


<div class="login">
        <h2>Log in</h2>
        <form action="login.php" method="post">
        <input type="text" name="username" id="username" placeholder="Username">
        <br>
        <br>
        <input type="password" name="pw" id="pw" placeholder="Password">
        <br>
        <br>
        <button type="submit" name="submit" id="submit">Login</button>
        </form>
    </div>


    <?php include "footer.php"?> 



   

<script src="myscript.js"></script>
</body>
</html>