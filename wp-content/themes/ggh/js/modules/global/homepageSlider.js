// init Swiper:
var mySwiper = new Swiper('.slider', {
  direction: 'horizontal',
  effect: "fade",
  loop: true,
  slidesPerView: 'auto',
  centeredSlides: true,
  grabCursor: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    prevEl: '.swiper-button-prev',
    nextEl: '.swiper-button-next'
  }
})
