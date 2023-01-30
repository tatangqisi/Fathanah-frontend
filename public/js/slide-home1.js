let slidehome1 = document.querySelectorAll('.home1-img');
let dots = document.querySelectorAll('.dots');

var counter = 0;

function slideauto(){
    slidehome1[counter].style.animation = 'slide1 0.8s ease-in forwards';
    if(counter >= slidehome1.length-1){
        counter = 0;
    }
    else{
        counter++; 
    }
    slidehome1[counter].style.animation = 'slide2 0.8s ease-in forwards';
}

function autoSliding(){
    deleteInterval = setInterval(timer, 7000);
    function timer(){
        slideauto();
    
    }
}
autoSliding();

function switchImages(currentImage){
    currentImage.classList.add('active');
    var imageId = currentImage.getAttribute('attr');
    if(imageId > counter){
        slidehome1[counter].style.animation = 'slide1 0.8s ease-in forwards';
        counter = imageId;
        slidehome1[counter].style.animation = 'slide2 0.8s ease-in forwards';
    }
    else if(imageId == counter){
        return;
    }
    else{
        slidehome1[counter].style.animation = 'slide-1 0.8s ease-in forwards';
        counter = imageId;
        slidehome1[counter].style.animation = 'slide-2 0.8s ease-in forwards';
    }

}

$(".kokota").mouseover(function(){
    $(".kokota").css({
        "animation" : "none"
    });
  });

$(".kokota").mouseout(function(){
    $(".kokota").css({
        "animation" : "atasbawah 2s infinite alternate-reverse"
    });
  });

$(window).scroll(function() {
    var LandingSub = $(this).scrollTop();
    console.log(LandingSub);

    if(LandingSub >= 200){
       $('.sub-menu h1').css({
        'opacity' : 1,
        'transform' : 'translateY(0)',
        'transition-duration' : '1s'
        }) 

       $('.submenu').css({
        'opacity' : 1,
        'transition-duration' : '1.5s',
        'transition-delay' : '.5s'
        }) 

       $('.SubmenuArrow').css({
        'opacity' : 1,
        'transition-duration' : '1.5s',
        'transition-delay' : '.5s'
        }) 

    } else if(LandingSub <= 200){
        $('.sub-menu h1').css({
            'opacity' : 0,
            'transform' : 'translateY(-50%)',
            'transition-duration' : '1s'
        })

        $('.submenu').css({
            'opacity' : 0
        })

        $('.SubmenuArrow').css({
            'opacity' : 0
        })
    }
    
})

$(window).scroll(function() {
    var LandingElement = $(this).scrollTop();
    // console.log(LandingElement);

    if(LandingElement >= 600){
        $('.jam1').css({
            'opacity' : '1',
            'transform' : 'translate(0, 0)'
            
        })

        $('.kokota').css({
            'opacity' : '1'
        })

        $('.hari').css({
            'scale' : '1',
            'opacity' : '1'
        })

        $('.waktu-shalat-content').css({
            'opacity' : '1',
            'transform' : 'translateY(0)'
        })

    } else if(LandingElement <= 600){
        $('.jam1').css({
            'opacity' : '0',
            'transform' : 'translate(0, -50%)',
            'transition-delay' : '0.5s'
        })

        $('.kokota').css({
            'opacity' : '0'
        })

        $('.hari').css({
            'scale' : '0',
            'opacity' : '0'
        })

        $('.waktu-shalat-content').css({
            'opacity' : '0',
            'transform' : 'translateY(50%)'
        })

    }
})

$(window).scroll(function() {
    var LandingArtikel = $(this).scrollTop();
    if(LandingArtikel >= 1400){
        $('.swiper-button-prev.beritaarrow.kanan').css({
            'opacity' : '1',
            'transform' : 'translateX(0)'
        })

        $('.swiper-button-next.beritaarrow.kiri').css({
            'opacity' : '1',
            'transform' : 'translateX(0)'
        })


    } else if(LandingArtikel < 1400){
        $('.beritaarrow.kanan').css({
            'opacity' : '0',
            'transform' : 'translateX(-100%)'
        })

        $('.beritaarrow.kiri').css({
            'opacity' : '0',
            'transform' : 'translateX(100%)'
        })
    }
})

$(window).scroll(function() {
    var LandingContact = $(this).scrollTop();
    if(LandingContact >= 1550){
        $('.fathanah-contact-form').css({
            'opacity' : '1',
            'transform' : 'translateX(0)'
        })

        $('.fathanah-contact').css({
            'opacity' : '1',
            'transform' : 'translateX(0)'
        })

    } else if(LandingContact <= 1550){
        $('.fathanah-contact-form').css({
            'opacity' : '0',
            'transform' : 'translateX(-100%)'
        })

        $('.fathanah-contact').css({
            'opacity' : '0',
            'transform' : 'translateX(100%)'
        })
    }

    
})

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var swiper = new Swiper(".myswiper", {
    slidesPerView: 2,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });