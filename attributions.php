<?php 

session_start();

if(!isset($_SESSION["username"])){
    header("Location:index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ed3136e613.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

<?php include "menu.php"?> 



<div class="attContainer">
<h2>Attributions</h2>
        <h3>Data sets</h3>
        <p>
            Tennis databases, files, and algorithms by <a href="http://www.tennisabstract.com/" target="_blank">Jeff Sackmann / Tennis Abstract</a>. 
        </p>
        <ul class="attributions">
            <li>ATP Data source: <a href="https://github.com/JeffSackmann/tennis_atp"  target="_blank">tennis_atp</a></li>
            <li>WTA Data source: <a href="https://github.com/JeffSackmann/tennis_wta"  target="_blank">tennis_wta</a></li>
        </ul>

        
        <h3>Images</h3>
        <ul class="attributions">
            <li><a href="https://www.flaticon.com/free-icons/tennis" title="tennis icons" target="_blank">Tennis icons created by dDara - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/free-icons/tennis" title="tennis icons" target="_blank">Tennis icons created by Freepik - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/free-icons/woman" title="woman icons" target="_blank">Woman icons created by Freepik - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/free-icons/sports-and-competition" title="sports and competition icons" target="_blank">Sports and competition icons created by Freepik - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/free-icons/tennis-player" title="tennis player icons" target="_blank">Tennis player icons created by Nikita Golubev - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/free-icons/tennis" title="tennis icons" target="_blank">Tennis icons created by imaginationlol - Flaticon</a></li>
            <li><a href="https://www.flaticon.com/free-icons/tennis" title="tennis icons" target="_blank">Tennis icons created by Those Icons - Flaticon</a></li>
        </ul>

        </div>


        <?php include "footer.php"?> 



<script src="myscript.js"></script>  
</body>
</html>