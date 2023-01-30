$(window).scroll(function() {
    var Scrolling = $(this).scrollTop();

    $('nav').css({
        'top' : ('-' + Scrolling/2 + 'rem')
    });
})

var arrow = document.getElementById('arrow');
var dropdown1 = document.getElementById('turun');
var dropdown2 = document.querySelector(".dropdown-ul")

dropdown1.onclick = function(){
    arrow.classList.toggle('kebalik');
    dropdown2.classList.toggle('muncullah');
}