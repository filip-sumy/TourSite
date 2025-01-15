const slider1 = new Swiper('.card-wrapper', {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 1,
  initialSlide: 1,
  freeMode: true,
  
  // observer: false,
  // observeParents: false,
  
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
        updateOnWindowResize: false,
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
    const header__container = document.getElementById("header__container");
    function toggleMenu() {
        menu.classList.toggle("hidden");
        main.classList.toggle("hidden");
        footer.classList.toggle("hidden");
        body__container.classList.toggle("hidden");
        header__container.classList.toggle("hidden");
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

const cardButton = document.getElementById("card-button");
const cardLink = document.getElementById("card__link");
const card = document.getElementById("card");

cardButton.addEventListener('click', () => {
  cardLink.classList.toggle('hidden');
  card.classList.toggle('active');
  
});

