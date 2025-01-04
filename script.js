new Swiper('.card-wrapper', {
  loop: true,
  spaceBetween: 30,
  slidesPerView: 1,
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
      400: {
        slidesPerView: 1.2,
        spaceBetween: 50,
      },
      420: {
        slidesPerView: 1.2,
        spaceBetween: -50,
      },
      768 : {
          slidesPerView: 2.2,
          spaceBetween: 50,
          
      },
      1024 : {
          slidesPerView: 2,
          spaceBetween: -80,
      },
      1200 : {
        slidesPerView: 2.2,
        spaceBetween: -150,
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
