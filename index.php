<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ed3136e613.js" crossorigin="anonymous"></script> 
  
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