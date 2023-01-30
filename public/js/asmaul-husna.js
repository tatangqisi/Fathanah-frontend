var Song = document.getElementById("asmaulHusnaSong");
var Icons = document.getElementById("PlayIcons");
var Glow = document.querySelector(".play-asm")

Icons.onclick = function(){
    if(Song.paused){
        Song.play();
        Icons.src = "icons/28.png";
        Icons.classList.toggle('play');
        Glow.classList.toggle('active');
    }
    else{
        Song.pause();
        Icons.src = "icons/27.png";
        Icons.classList.toggle('play');
        Glow.classList.toggle('active');
    }
}