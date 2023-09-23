(function ($) {
  $(document).ready(function () {
    // главный слайдер
    const heroSlider = new Swiper('.hero__slider', {
      fadeEffect: { crossFade: true },
      virtualTranslate: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
      speed: 500,
      slidesPerView: 1,
      effect: 'fade',
      loop: true,
      navigation: {
        nextEl: '.hero__slider_nav-next',
        prevEl: '.hero__slider_nav-prev',
      },
      pagination: {
        el: '.hero__slider_pag_el',
        type: 'bullets',
        bulletClass: 'hero__slider_pag_el_item',
        bulletActiveClass: 'active',
        clickable: true,
      },
    });

    // слайдер "услуги"
    const serv__body_slider = new Swiper('.serv__body_slider', {
      slidesPerView: 1,
      spaceBetween: 15,
      scrollbar: {
        el: '.serv__body_slider_scrollbar_el',
        draggable: true,
      },
      breakpoints: {
        1200: { slidesPerView: 4, spaceBetween: 20 },
        768: { slidesPerView: 3, spaceBetween: 20 },
      },
    });

    // слайдер "клиентские дни"
    const client__body_slider = new Swiper('.client__body_slider', {
      slidesPerView: 1,
      spaceBetween: 20,
      breakpoints: {
        1000: { spaceBetween: 20, slidesPerView: 4 },
        620: { slidesPerView: 2, spaceBetween: 10 },
      },
    });

    // слайдер "онлайн бутик"
    const online__body_slider = new Swiper('.online__body_slider', {
      slidesPerView: 1,
      spaceBetween: 15,
      breakpoints: { 1200: { slidesPerView: 4, spaceBetween: 20 }, 768: { slidesPerView: 3, spaceBetween: 20 } },
    });
  });
})(jQuery);
