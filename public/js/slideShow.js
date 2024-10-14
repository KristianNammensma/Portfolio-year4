// import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
// import { Navigation, Pagination } from 'swiper/modules';

// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

window.addEventListener('load', () => {
    const swiperAuto = new Swiper('.swiperAuto', {
        // modules: [ Navigation, Pagination],
    
        loop: true,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false, 
        },
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        speed: 500,
            
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      });


      const swiperButton = new Swiper('.swiper', {
  
        loop: true,
        pagination: {
          el: '.swiper-pagination',
        },

        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      });

      var swiper = new Swiper(".swiper-card", {
        effect: "cards",
        grabCursor: true,
      });

})

