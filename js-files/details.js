document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const body__container = document.getElementById("body__container");
    const main = document.getElementById("main");
    const menuButton = document.getElementById("menuButton");
    const menuIcon = document.getElementById("menuIcon");
    const footer = document.getElementById("footer");
    const header__container = document.getElementById("header__container");
    function toggleMenu() {
        menu.classList.toggle("hidden");
        main.classList.toggle("hidden");
        footer.classList.toggle("hidden");
        body__container.classList.toggle("hidden");
        header__container.classList.toggle("hidden");
        // Изменяем иконку и alt текст в зависимости от состояния меню
        if (menu.classList.contains("hidden")) {
            menuIcon.src = "../images/Menu_button.svg";
            menuIcon.alt = "Открыть меню";
        } else {
            menuIcon.src = "../images/Menu_button_back.svg";
            menuIcon.alt = "Закрыть меню";
        }
    }

    // Добавляем обработчик события на кнопку
    menuButton.addEventListener("click", toggleMenu);
});

const slider4 = new Swiper('.question-wrapper', {
        allowTouchMove: true,
        freeMode: true,
        loop: true,
        pagination: {
          el: '.question-wrapper .swiper-pagination',
          clickable: true,
          dynamicBullets: true,
        },
    // Breakpoints for responsiveness
    breakpoints: {
      0 : {
        slidesPerView: 1.2,
        spaceBetween: 30,
      },
      
      390 : {
        slidesPerView: 1.3,
        spaceBetween: 30,
      },

      420 : {
        slidesPerView: 1.4,
        spaceBetween: 30,
      },
      
      450 : {
        slidesPerView: 1.5,
        spaceBetween: 30,
      },

      480 : {
        slidesPerView: 1.6,
        spaceBetween: 30,
      },

      510 : {
        slidesPerView: 1.7,
        spaceBetween: 30,
      },

      540 : {
        slidesPerView: 1.8,
        spaceBetween: 30,
      },

      570 : {
        slidesPerView: 1.9,
        spaceBetween: 30,
      },

      600 : {
        slidesPerView: 2,
        spaceBetween: 30,
      },

      630 : {
        slidesPerView: 2.1,
        spaceBetween: 30,
      },

      660 : {
        slidesPerView: 2.2,
        spaceBetween: 30,
      },

      690 : {
        slidesPerView: 2.3,
        spaceBetween: 30,
      },

      720 : {
        slidesPerView: 2.4,
        spaceBetween: 30,
      },

      750 : {
        slidesPerView: 2.5,
        spaceBetween: 30,
      },

      830 : {
        slidesPerView: 2.5,
        spaceBetween: 10,
      },

      850 : {
        slidesPerView: 2.5,
        spaceBetween: -10,
      },

      870 : {
        slidesPerView: 2.5,
        spaceBetween: -30,
      },

      900 : {
        slidesPerView: 2.5,
        spaceBetween: -50,
      },

      920 : {
        slidesPerView: 2.5,
        spaceBetween: -70,
      },

      950 : {
        slidesPerView: 2.5,
        spaceBetween: -90,
      },

      970 : {
        slidesPerView: 2.5,
        spaceBetween: -110,
      },

      990 : {
        slidesPerView: 2.5,
        spaceBetween: -130,
      },

      1010 : {
        slidesPerView: 2.5,
        spaceBetween: -150,
      },

      1030 : {
        slidesPerView: 2.5,
        spaceBetween: -170,
      },

      1050 : {
        slidesPerView: 2.5,
        spaceBetween: -190,
      },

      1070 : {
        slidesPerView: 2.5,
        spaceBetween: -210,
      },

      1090 : {
        slidesPerView: 2.5,
        spaceBetween: -230,
      },

      1110 : {
        slidesPerView: 2.5,
        spaceBetween: -250,
      },

      1130 : {
        slidesPerView: 2.5,
        spaceBetween: -270,
      },

      1150 : {
        slidesPerView: 2.5,
        spaceBetween: -290,
      },

      1170 : {
        slidesPerView: 3,
        spaceBetween: -150,
      },

      1400: {
        updateOnWindowResize: false,
        slidesPerView: 3,
        spaceBetween: -270,
    }
  }
  });

  for (let i = 1; i <= 5; i++) {
    const whatToDoButton = document.getElementById(`whatToDoButton-${i}`);
    const whatToDo = document.getElementById(`whatToDo-${i}`);
    const activitiesText = document.getElementById(`activities__text-${i}`);
    const activities = document.getElementById(`activities-${i}`);
  
    whatToDoButton.addEventListener('click', () => {
      whatToDo.classList.toggle('hidden');
      activitiesText.classList.toggle('active');
      activities.classList.toggle('active');
    });
  }

  