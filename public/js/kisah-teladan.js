var swiper = new Swiper(".MySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: false,
    coverflowEffect: {
      rotate: 0,
      stretch: 170,
      depth: 100,
      modifier: 2,
      slideShadows: true,
    },
    navigation:{
      nextEl:'.swiper-button-next',
      prevEl:'.swiper-button-prev',
      
    },
    pagination: {
      el: ".swiper-pagination",
    },
});
