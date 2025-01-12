const slider1 = new Swiper('.card-wrapper', {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 1,
  initialSlide: 1,
  freeMode: true,
  // If we need pagination
  pagination: {
    el: '.card-wrapper .swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.card-wrapper .swiper-button-next',
    prevEl: '.card-wrapper .swiper-button-prev',
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

const slider2 = new Swiper('.reviews-wrapper', {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 1,
  initialSlide: 0,
  freeMode: true,
  // If we need pagination
  pagination: {
    el: '.reviews-wrapper .swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-wrapper .swiper-button-next',
    prevEl: '.reviews-wrapper .swiper-button-prev',
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

const slider3 = new Swiper('.photos-wrapper', {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 1,
  initialSlide: 0,
  freeMode: true,
  
  // Pagination
  pagination: {
      el: '.photos-wrapper .swiper-pagination',
      clickable: true,
      dynamicBullets: true,
  },

  // Navigation arrows
  navigation: {
      nextEl: '.photos-wrapper .swiper-button-next',
      prevEl: '.photos-wrapper .swiper-button-prev',
  },

  // Breakpoints for responsiveness
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

const slider4 = new Swiper('.question-wrapper', {
  
  // Breakpoints for responsiveness
  breakpoints: {
    0 : {
      allowTouchMove: false,
      freeMode: false,
      loop: false,
      //initialSlide: 0,
    },
    // 375 : {
    //   slidesPerView: 1.2,
    //   spaceBetween: 30,
    // },
    
    // 420: {
    //   slidesPerView: 1.4,
    //   spaceBetween: 50,
    // },
    // 470: {
    //   slidesPerView: 1.6,
    //   spaceBetween: 50,
    // },
    // 520: {
    //   slidesPerView: 1.8,
    //   spaceBetween: 50,
    // },
    600: {
      allowTouchMove: true,
      freeMode: true,
      loop: true,
      //initialSlide: 0,
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
    const body__container = document.getElementById("body__container");
    const main = document.getElementById("main");
    const menuButton = document.getElementById("menuButton");
    const menuIcon = document.getElementById("menuIcon");
    const footer = document.getElementById("footer");
    function toggleMenu() {
        menu.classList.toggle("hidden");
        main.classList.toggle("hidden");
        footer.classList.toggle("hidden");
        body__container.classList.toggle("hidden");
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

const whatToDoButton_1 = document.getElementById('whatToDoButton-1');
const whatToDo_1 = document.getElementById('whatToDo-1');

whatToDoButton_1.addEventListener('click', () => {
  whatToDo_1.classList.toggle('hidden');
});

const whatToDoButton_2 = document.getElementById('whatToDoButton-2');
const whatToDo_2 = document.getElementById('whatToDo-2');

whatToDoButton_2.addEventListener('click', () => {
  whatToDo_2.classList.toggle('hidden');
});

const whatToDoButton_3 = document.getElementById('whatToDoButton-3');
const whatToDo_3 = document.getElementById('whatToDo-3');

whatToDoButton_3.addEventListener('click', () => {
  whatToDo_3.classList.toggle('hidden');
});

const whatToDoButton_4 = document.getElementById('whatToDoButton-4');
const whatToDo_4 = document.getElementById('whatToDo-4');

whatToDoButton_4.addEventListener('click', () => {
  whatToDo_4.classList.toggle('hidden');
});

const whatToDoButton_5 = document.getElementById('whatToDoButton-5');
const whatToDo_5 = document.getElementById('whatToDo-5');

whatToDoButton_5.addEventListener('click', () => {
  whatToDo_5.classList.toggle('hidden');
});