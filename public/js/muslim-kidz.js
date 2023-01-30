var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  
  coverflowEffect: {
    rotate: 0,
    stretch: 60,
    depth: 200,
    modifier: 2,
    slideShadows: true,
  },
  navigation:{
    nextEl:'.swiper-button-next',
    prevEl:'.swiper-button-prev',
    
  },
  
});