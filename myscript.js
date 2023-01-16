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












