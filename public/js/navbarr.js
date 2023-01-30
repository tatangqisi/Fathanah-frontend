$(window).scroll(function() {
    var Scrolling = $(this).scrollTop();
    console.log(Scrolling);

    if(Scrolling > 0){
       $('nav').css({
        'box-shadow' : '0 1px 5px rgba(0, 0, 0, .5)'
    }); 

    } else if(Scrolling === 0){

        $('nav').css({
            'box-shadow' : 'none'
        });  
    }
})

var arrow = document.getElementById('arrow');
var dropdown1 = document.querySelector(".drop");

dropdown1.onclick = function(){
    arrow.classList.toggle('kebalik');
}

// var ThisTitle = document.getElementsByTagName('title');
// var Navi = document.getElementsByClassName('.navli');

// function Navbar(){
//     if (ThisTitle === "Artikel"){
        
//     }
// }