new Swiper('.card-wrapper', {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 1,
  initialSlide: 1,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
  breakpoints: {
      0 : {
          slidesPerView: 1,
          
      },
      375 : {
        slidesPerView: 1.2,
        spaceBetween: 30,
      },
      
      420: {
        slidesPerView: 1.4,
        spaceBetween: 50,
      },
      470: {
        slidesPerView: 1.6,
        spaceBetween: 50,
      },
      520: {
        slidesPerView: 1.8,
        spaceBetween: 50,
      },
      600: {
        slidesPerView: 1.8,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 1.8,
        spaceBetween: 10,
      },
      670: {
        slidesPerView: 1.8,
        spaceBetween: 0,
      },
      700: {
        slidesPerView: 1.9,
        spaceBetween: -70,
      },
      720: {
        slidesPerView: 1.9,
        spaceBetween: -50,
      },
      740: {
        slidesPerView: 2,
        spaceBetween: -20,
      },
      768 : {
          slidesPerView: 2.2,
          spaceBetween: 0, 
      },
      820 : {
        slidesPerView: 2.4,
        spaceBetween: 0, 
      },
      870 : {
        slidesPerView: 2.6,
        spaceBetween: 0, 
      },
      920 : {
        slidesPerView: 2.8,
        spaceBetween: 0, 
      },
      970 : {
        slidesPerView: 2.8,
        spaceBetween: -10, 
      },
      1000 : {
        slidesPerView: 2.8,
        spaceBetween: -30, 
      },
      1060 : {
        slidesPerView: 2.8,
        spaceBetween: -50, 
      },
      1100 : {
        slidesPerView: 2.8,
        spaceBetween: -70, 
      },
      1130 : {
        slidesPerView: 2.9,
        spaceBetween: -70, 
      },
      1150 : {
        slidesPerView: 2.9,
        spaceBetween: -100, 
      },
      1200 : {
        slidesPerView: 2.9,
        spaceBetween: -170,
      },
      1250 : {
        slidesPerView: 3,
        spaceBetween: -320,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 60,
    }
  }

});


document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const main = document.getElementById("main");
    const menuButton = document.getElementById("menuButton");
    const menuIcon = document.getElementById("menuIcon");

    function toggleMenu() {
        menu.classList.toggle("hidden");
        main.classList.toggle("hidden");

        // Изменяем иконку и alt текст в зависимости от состояния меню
        if (menu.classList.contains("hidden")) {
            menuIcon.src = "images/Menu_button.svg";
            menuIcon.alt = "Открыть меню";
        } else {
            menuIcon.src = "images/Menu_button_back.svg";
            menuIcon.alt = "Закрыть меню";
        }
    }

    // Добавляем обработчик события на кнопку
    menuButton.addEventListener("click", toggleMenu);
});
