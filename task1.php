<?php 

session_start();

if(!isset($_SESSION["username"])){
    header("Location:index.php");
}
?>

<?php
require_once "dbSettings.php";

?>

<?php

$query = $dbConn -> prepare("SELECT CustomerNo, Name FROM ")

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
<style>


.tblHead{
    background-color: black;
    color: white;
 
 
}



th, td {
  padding: 15px;
  text-align: center;
}


.gslamPic{
    position: relative;
    height: 40px;
    width: 40px;
    top: 13vh;
    left: 56vw;
}

/* css for menu */

:root{
    font-family: 'Courier New', Courier, monospace;
}



       

        

        .topbar{
            background-color: black;
            position: fixed;
            height: 9vh;
            width: 1500px;
            transition: height 0.5s ease-in-out;
            margin-top: 0;
            padding-top: 0;
            top: -0.2vh;
           
            
          
        }

        .web-title{
            color: aliceblue;
            position: fixed;
            top:-0.7vh;
            left: 32vw;
            
        }

       
        .topbar.open{
            height: 600px;    
            background-color: black;
            transition-delay: 0.1s;
            
        }

        
        .lines {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        .line {
            width: 60px;
            height: 0.4rem;
            background-color: rgb(255, 255, 255);
            border-radius: 0.2rem;
        }

        .hamburger-container {
            width: 3.5rem;
            height: 3.5rem;
            position: fixed;
            top: 0.2rem;
            left: 1rem;
            cursor: pointer;
            z-index: 100;
            overflow: hidden;
        }

        .line {
  transition: transform 0.5s ease-in-out;
}


.nav-menu{
    display: flex;
    justify-content: space-between;
    position: relative;
    left: 90px;
}



.nav-boxes {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-column-gap: 5px;
    grid-row-gap: 5px;
    
    visibility: hidden;
    overflow: hidden;
    transition: visibility 0.3s ease-in-out, max-height 0.3s ease-in-out;
    margin: 5%;
}

.homeI {
    display: flex;
    justify-content: center;
    align-items: center;
   background: url(home.jpeg) no-repeat center center;
   box-shadow: inset 0 0 0 1000px rgba(255, 255, 255, 0.381);
    height: 165px;
   width: 215px;
   padding: 5%;  
}

.homeI:hover {
    display: flex;
    justify-content: center;
    align-items: center;
   background: url(home.jpeg)no-repeat center center;
   box-shadow: inset 0 0 0 1000px rgba(248, 244, 244, 0.887);
    height: 165px;
   width: 215px;
   padding: 5%;  
}

.home-link {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-weight: bolder;
}


.g-slamI {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(grandslam.jpeg);
   box-shadow: inset 0 0 0 1000px rgba(255, 255, 255, 0.381);
    height: 165px;
   width: 215px;
   padding: 5%;  
}

.g-slamI:hover {
    display: flex;
    justify-content: center;
    align-items: center;
   background: url(grandslam.jpeg);
   box-shadow: inset 0 0 0 1000px rgba(248, 244, 244, 0.887);
    height: 165px;
   width: 215px;
   padding: 5%;  
}

.gslam-link {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-weight: bolder;
    
}

.live-ScoreI{
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(livescore.jpeg);
   box-shadow: inset 0 0 0 1000px rgba(255, 255, 255, 0.381);
    height: 165px;
   width: 215px;
   padding: 5%;  
}

.live-ScoreI:hover {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(livescore.jpeg);
   box-shadow: inset 0 0 0 1000px rgba(248, 244, 244, 0.887);
    height: 165px;
   width: 215px;
   padding: 5%;  
}

.score-link{
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-weight: bolder;
}


.statsI {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(stats2.png) no-repeat center;
    box-shadow: inset 0 0 0 1000px rgba(255, 255, 255, 0.381);
    height: 165px;
   width: 215px;
   padding: 5%; 
   position: relative;
   top: -45%;    
 
}

.statsI:hover {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(stats2.png) no-repeat center;
    box-shadow: inset 0 0 0 1000px rgba(248, 244, 244, 0.887);
    height: 165px;
   width: 215px;
   padding: 5%; 
   position: relative;
   top: -45%;    
 
}



.stats-link {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-weight: bolder;
}

.rankI {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(rankings.jpeg) no-repeat center;
    box-shadow: inset 0 0 0 1000px rgba(255, 255, 255, 0.381);
    height: 165px;
   width: 215px;
   padding: 5%;  
   position: relative;
   top: -45%; 
}

.rankI:hover {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(rankings.jpeg) no-repeat center;
    box-shadow: inset 0 0 0 1000px rgba(248, 244, 244, 0.887);
    height: 165px;
   width: 215px;
   padding: 5%; 
   position: relative;
   top: -45%;    
 
}


.rank-link {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-weight: bolder;
}

.playersI {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(players.jpeg) no-repeat center ;
    box-shadow: inset 0 0 0 1000px rgba(255, 255, 255, 0.381);
    height: 165px;
   width: 215px;
   padding: 5%;  
   position: relative;
   top: -45%; 
  
}

.playersI:hover {
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(players.jpeg) no-repeat center ;
    box-shadow: inset 0 0 0 1000px rgba(248, 244, 244, 0.887);
    height: 165px;
   width: 215px;
   padding: 5%;  
   position: relative;
   top: -45%; 
}

.players-link {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 20px;
    font-weight: bolder;
    text-decoration: solid;
}

.attributionsI{
    display: flex;
    justify-content: center;
    align-items: center;
    background: black;
    height: 20vh;
   width: 15vw;
   padding: 28%;  
   top: -45%;
   border: 1px white solid;
  
}

.attributionsI:hover{
    display: flex;
    justify-content: center;
    align-items: center;
    background: black;
    height: 20vh;
   width: 15vw;
   padding: 28%;  
   top: -45%;
   border: 1px rgb(0, 0, 0) solid ;
  
}






.attributions-link {
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-size: 20px;
    font-weight: bolder;
}







.topbar.open .nav-boxes {
    visibility: visible;
    max-height: 1000px;
    transition-delay: 0.3s;
}

.topbar:not(.open) .nav-boxes {
    visibility: hidden;
    max-height: 0;
    transition-delay: 0.1s;
}

.door {
    position: relative;
    left: vw;
    bottom: 5.5vh;
    height: max-content;
    width: max-content;
    color: rgb(237, 237, 237);
    font-size: 25px;
   
}


.logout{
    text-decoration: none !important;
    position: relative;
    left: 84.2%; 
    color: rgb(235, 231, 231);
    font-weight: lighter;
    font-size: larger;
    top: 0.8vh;
   
}



.logoutlink{
    position: relative;
    color: aliceblue;
    text-decoration: none;
    font-weight: bolder;
    font-size: larger;
    transition: all 0.5s ease-in-out;
}

.logoutlink::before {
    content: "\f52a";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: relative;
    right: 0.5vw;
    top: 2px;
    transition: all 0.5s ease-in-out;
}

.logoutlink:hover::before {
    content: "\f52b";

   
}

</style>



</head>
<body>
</head>
<body>



     
<div class="topbar">
        <div class="hamburger-container" onclick="toggleMenu()">
            <div class="lines">
              <div class="line line-1"></div>
              <div class="line line-2"></div>
              <div class="line line-3"></div>
            </div>
        </div>


        <ul class="logout">
            <a class = "logoutlink" href="logout.php">Log Out
        </a>
        </ul>

        <h1 class="web-title">2019 ATP & WTA Tournaments</h1>




<div class="nav-boxes">
    <div class="homeI">
    <a class="home-link" href="index.php">HOME</a>
    </div>
    <div class="g-slamI">
    <a class="gslam-link" href="task1.php">GRAND SLAM</a>
    </div>
    <div class="live-ScoreI">
    <a class="score-link" href="task2.php">LIVE SCORE</a>
    </div>
    <div class="attributionsI">
    <a class="attributions-link" href="attributions.php">ATTRIBUTIONS</a>
    </div>
    <div class="rankI">
    <a class="rank-link" href="task3.php">RANKINGS</a>
    </div>
    <div class="playersI">
    <a class="players-link" href="task4.php">PLAYERS</a>
    </div>
    <div class="statsI"> 
    <a class="stats-link" href="task5.php">STATISTICS</a>
    </div>

    </div>







<?php
$query = $dbConn->prepare("SELECT tournament_name, surface, week_start, category
FROM tournament WHERE tournament_level = 'G'
ORDER BY week_start DESC;");



$query -> execute();

?>

<div class="tblCon">
<table class="G-SlamT">

<thead>
<tr class="tblHead">
    <th>Tournamnet name</th>    
    <th>Surface</th>
    <th>Starting Week</th>
    <th>Category</th>
    <th>Tournament ID</th>
</tr>
</thead>
<?php
while($row = $query -> fetch()){
?>

<tr class="tblData">
    <td> <?php echo $row["tournament_name"]?> </td>
    <td> <?php echo $row["surface"]?></td>
    <td> <?php echo $row["week_start"]?> </td>
    <td> <?php echo $row["category"]?> </td>
    <td></td>
</tr>
<?php
}

?>
</table>

</div>

<div class="gslamPic">
<img src="task1pic.png" alt="Pic of someone kissing trophy">
</div>








<?php include "footer.php"?> 



<script>
// js from myscript.jss //

document.addEventListener("DOMContentLoaded", function() {
    


    document.querySelector(".topbar").addEventListener("click", function(){
       var login = document.querySelector(".login");
       var topbar = document.querySelector(".topbar");
       var topbarHeight = topbar.getBoundingClientRect().height;
   
       if (topbarHeight <= 1000) {
           setTimeout(function() {
               login.classList.toggle("move-up");
           }, 380);
       }
       else {
           login.classList.toggle("move-up");
       }
   });
    // event listner for login
   
   
   
   
   document.querySelector(".topbar").addEventListener("click", function(){
       var container = document.querySelector(".attContainer");
       var topbar = document.querySelector(".topbar");
       var topbarHeight = topbar.getBoundingClientRect().height;
   
       if (topbarHeight <= 1000) {
           setTimeout(function() {
               container.classList.toggle("move-up");
           }, 380);
       }
   });
   
   
   
   
   document.querySelector(".topbar").addEventListener("click", function(){
       var table = document.querySelector(".G-SlamT");
       var topbar = document.querySelector(".topbar");
       var topbarHeight = topbar.getBoundingClientRect().height;
   
       if (topbarHeight <= 1000) {
           setTimeout(function() {
               table.classList.toggle("move-offscreen");
           }, 380);
       }
   });
   
   
   document.querySelector(".topbar").addEventListener("click", function(){
       var pic = document.querySelector(".gslamPic");
       var topbar = document.querySelector(".topbar");
       var topbarHeight = topbar.getBoundingClientRect().height;
   
       if (topbarHeight <= 1000) {
           setTimeout(function() {
            pic.classList.toggle("move-offscreen");
           }, 380);
       }
   });
   
   
   
   
   
   
   });
   
   

// js from myscript.jss //

// js from menu.php//

function toggleMenu() {
    var topbar = document.querySelector('.topbar');
    var lines = document.querySelectorAll('.line');
    topbar.classList.toggle("open");
}
function toggleMenu() {
var topbar = document.querySelector('.topbar');
var lines = document.querySelectorAll('.line');
if (topbar.classList.contains("open")) {
topbar.style.height = '60px';
lines.forEach(line => {
line.style.transform = 'rotate(0deg)';
});
} else {
topbar.style.height = '600px';
lines.forEach(line => {
line.style.transform = 'rotate(90deg)';
});
}
topbar.classList.toggle("open");
}







// js from menu.php



</script>  

</body>
</html>


