const slider1 = new Swiper('.card-wrapper', {
  loop: true,
  spaceBetween: 0,
  slidesPerView: 3,
  initialSlide: 0,
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
          slidesPerView: 1.2,
          spaceBetween: 10,
          
      },

      390 : {
        slidesPerView: 1.3,
        spaceBetween: 20,
      },
      
      420: {
        slidesPerView: 1.4,
        spaceBetween: 20,
      },
      450: {
        slidesPerView: 1.5,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1.6,
        spaceBetween: 20,
      },
      510: {
        slidesPerView: 1.7,
        spaceBetween: 20,
      },
      540: {
        slidesPerView: 1.8,
        spaceBetween: 20,
      },
      570: {
        slidesPerView: 1.9,
        spaceBetween: 20,
      },
      600: {
        slidesPerView: 1.9,
        spaceBetween: 40,
      },
      630: {
        slidesPerView: 1.9,
        spaceBetween: 10,
      },
      660: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      690: {
        slidesPerView: 2.1,
        spaceBetween: 10,
      },
      720: {
        slidesPerView: 2.2,
        spaceBetween: 10,
      },
      750: {
        slidesPerView: 2.3,
        spaceBetween: 10,
      },
      780: {
        slidesPerView: 2.4,
        spaceBetween: 10,
      },
      810: {
        slidesPerView: 2.5,
        spaceBetween: 10,
      },
      840: {
        slidesPerView: 2.5,
        spaceBetween: -10,
      },
      870: {
        slidesPerView: 2.5,
        spaceBetween: -30,
      },
      900: {
        slidesPerView: 2.5,
        spaceBetween: -50,
      },
      930: {
        slidesPerView: 2.5,
        spaceBetween: -70,
      },
      960: {
        slidesPerView: 2.5,
        spaceBetween: -100,
      },
      990: {
        slidesPerView: 2.5,
        spaceBetween: -130,
      },
      1020: {
        slidesPerView: 2.5,
        spaceBetween: -160,
      },
      1050: {
        slidesPerView: 2.5,
        spaceBetween: -190,
      },
      1070: {
        slidesPerView: 2.5,
        spaceBetween: -120,
      },
      1100: {
        slidesPerView: 2.5,
        spaceBetween: -150,
      },
      1130: {
        slidesPerView: 2.5,
        spaceBetween: -180,
      },
      1160: {
        slidesPerView: 2.5,
        spaceBetween: -210,
      },
      1190: {
        slidesPerView: 2.5,
        spaceBetween: -240,
      },
      1200: {
        slidesPerView: 2.5,
        spaceBetween: -150,
      },
      1230: {
        slidesPerView: 2.5,
        spaceBetween: -180,
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
        slidesPerView: 1.2,
        spaceBetween: 10,
        
    },

    390 : {
      slidesPerView: 1.3,
      spaceBetween: 20,
    },
    
    420: {
      slidesPerView: 1.4,
      spaceBetween: 20,
    },
    450: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    480: {
      slidesPerView: 1.6,
      spaceBetween: 20,
    },
    510: {
      slidesPerView: 1.7,
      spaceBetween: 20,
    },
    540: {
      slidesPerView: 1.8,
      spaceBetween: 20,
    },
    570: {
      slidesPerView: 1.9,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 1.9,
      spaceBetween: 40,
    },
    630: {
      slidesPerView: 1.9,
      spaceBetween: 10,
    },
    660: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    690: {
      slidesPerView: 2.1,
      spaceBetween: 10,
    },
    720: {
      slidesPerView: 2.2,
      spaceBetween: 10,
    },
    750: {
      slidesPerView: 2.3,
      spaceBetween: 10,
    },
    780: {
      slidesPerView: 2.4,
      spaceBetween: 10,
    },
    810: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    840: {
      slidesPerView: 2.5,
      spaceBetween: -10,
    },
    870: {
      slidesPerView: 2.5,
      spaceBetween: -30,
    },
    900: {
      slidesPerView: 2.5,
      spaceBetween: -50,
    },
    930: {
      slidesPerView: 2.5,
      spaceBetween: -70,
    },
    960: {
      slidesPerView: 2.5,
      spaceBetween: -100,
    },
    990: {
      slidesPerView: 2.5,
      spaceBetween: -130,
    },
    1020: {
      slidesPerView: 2.5,
      spaceBetween: -160,
    },
    1050: {
      slidesPerView: 2.5,
      spaceBetween: -190,
    },
    1070: {
      slidesPerView: 2.5,
      spaceBetween: -120,
    },
    1100: {
      slidesPerView: 2.5,
      spaceBetween: -150,
    },
    1130: {
      slidesPerView: 2.5,
      spaceBetween: -180,
    },
    1160: {
      slidesPerView: 2.5,
      spaceBetween: -210,
    },
    1190: {
      slidesPerView: 2.5,
      spaceBetween: -240,
    },
    1200: {
      slidesPerView: 2.5,
      spaceBetween: -150,
    },
    1230: {
      slidesPerView: 2.5,
      spaceBetween: -180,
    },
    1400: {
      updateOnWindowResize: false,// can also be true here?
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
        slidesPerView: 1.2,
        spaceBetween: 10,
        
    },

    390 : {
      slidesPerView: 1.3,
      spaceBetween: 20,
    },
    
    420: {
      slidesPerView: 1.4,
      spaceBetween: 20,
    },
    450: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
    480: {
      slidesPerView: 1.6,
      spaceBetween: 20,
    },
    510: {
      slidesPerView: 1.7,
      spaceBetween: 20,
    },
    540: {
      slidesPerView: 1.8,
      spaceBetween: 20,
    },
    570: {
      slidesPerView: 1.9,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 1.9,
      spaceBetween: 40,
    },
    630: {
      slidesPerView: 1.9,
      spaceBetween: 10,
    },
    660: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    690: {
      slidesPerView: 2.1,
      spaceBetween: 10,
    },
    720: {
      slidesPerView: 2.2,
      spaceBetween: 10,
    },
    750: {
      slidesPerView: 2.3,
      spaceBetween: 10,
    },
    780: {
      slidesPerView: 2.4,
      spaceBetween: 10,
    },
    810: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    840: {
      slidesPerView: 2.5,
      spaceBetween: -10,
    },
    870: {
      slidesPerView: 2.5,
      spaceBetween: -30,
    },
    900: {
      slidesPerView: 2.5,
      spaceBetween: -50,
    },
    930: {
      slidesPerView: 2.5,
      spaceBetween: -70,
    },
    960: {
      slidesPerView: 2.5,
      spaceBetween: -100,
    },
    990: {
      slidesPerView: 2.5,
      spaceBetween: -130,
    },
    1020: {
      slidesPerView: 2.5,
      spaceBetween: -160,
    },
    1050: {
      slidesPerView: 2.5,
      spaceBetween: -190,
    },
    1070: {
      slidesPerView: 2.5,
      spaceBetween: -120,
    },
    1100: {
      slidesPerView: 2.5,
      spaceBetween: -150,
    },
    1130: {
      slidesPerView: 2.5,
      spaceBetween: -180,
    },
    1160: {
      slidesPerView: 2.5,
      spaceBetween: -210,
    },
    1190: {
      slidesPerView: 2.5,
      spaceBetween: -240,
    },
    1200: {
      slidesPerView: 2.5,
      spaceBetween: -150,
    },
    1230: {
      slidesPerView: 2.5,
      spaceBetween: -180,
    },
    1400: {
      updateOnWindowResize: false,
      slidesPerView: 4,
      spaceBetween: 60,
  }
}
});

const slider4 = new Swiper('.question-wrapper', {
  
  // Pagination
  pagination: {
    el: '.question-wrapper .swiper-pagination',
    clickable: true,
    dynamicBullets: true,
},

  // Breakpoints for responsiveness
  breakpoints: {
    0 : {
      allowTouchMove: false,
      freeMode: false,
      loop: false,
      //initialSlide: 0,
    },
    600: {
      allowTouchMove: true,
      freeMode: true,
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: 30,
    },
    630: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -10,
    },
    660: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -40,
    },
    690: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -70,
    },
    720: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -100,
    },
    750: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -130,
    },
    780: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -160,
    },
    810: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -190,
    },
    840: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -220,
    },
    870: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -250,
    },
    900: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -280,
    },
    930: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -310,
    },
    960: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -340,
    },
    990: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -370,
    },
    1020: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -400,
    },
    1050: {
      loop: true,
      slidesPerView: 1.9,
      spaceBetween: -430,
    },
    1070: {
      loop: true,
      slidesPerView: 2,
      spaceBetween: -320,
    },
    1100: {
      loop: true,
      slidesPerView: 2,
      spaceBetween: -350,
    },
    1130: {
      loop: true,
      slidesPerView: 2,
      spaceBetween: -380,
    },
    1160: {
      loop: true,
      slidesPerView: 2,
      spaceBetween: -410,
    },
    1190: {
      loop: true,
      slidesPerView: 2,
      spaceBetween: -440,
    },
    1200: {
      loop: true,
      slidesPerView: 2,
      spaceBetween: -350,
    },
    1250: {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 0,
    },
    1350: {
      loop: true,
      slidesPerView: 4,
      spaceBetween: 100,
    },

    1730: {
      loop: true,
      slidesPerView: 5,
      spaceBetween: 0,
    },
}
});




// document.addEventListener("DOMContentLoaded", function () {
//   const swiperWrapper = document.querySelector('.question-wrapper .swiper-wrapper');
  
//   if (!swiperWrapper) return; // Защита от ошибок, если слайдер отсутствует

//   const slideCount = window.slideCount || 0; // Получаем количество слайдов из PHP

//   const slider4 = new Swiper('.question-wrapper', {
//       slidesPerView: Math.min(slideCount, 5), // Показываем не больше, чем есть, но максимум 5
//       slidesPerGroup: Math.min(slideCount, 5),
//       spaceBetween: 20,
//       loop: slideCount >= 5, // Loop включается, если слайдов 5 или больше
//       navigation: {
//           nextEl: '.swiper-button-next',
//           prevEl: '.swiper-button-prev'
//       },
//       pagination: {
//           el: '.swiper-pagination',
//           clickable: true
//       },
//       breakpoints: {
//           0: {
//               allowTouchMove: false,
//               freeMode: false,
//               loop: false,
//           },
//           600: {
//               allowTouchMove: true,
//               freeMode: true,
//               loop: slideCount >= 5,
//               slidesPerView: Math.min(slideCount, 1.9),
//               spaceBetween: 30,
//           },
//           768: {
//               loop: slideCount >= 5,
//               slidesPerView: Math.min(slideCount, 3),
//               spaceBetween: 20,
//           },
//           1024: {
//               loop: slideCount >= 5,
//               slidesPerView: Math.min(slideCount, 4),
//               spaceBetween: 20,
//           },
//           1280: {
//               loop: slideCount >= 5,
//               slidesPerView: Math.min(slideCount, 5),
//               spaceBetween: 20,
//           }
//       }
//   });
// });



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

// for (let i = 1; i <= 5; i++) {
//   const whatToDoButton = document.getElementById(`whatToDoButton-${i}`);
//   const whatToDo = document.getElementById(`whatToDo-${i}`);

//   // Проверяем, нашелся ли элемент
//   if (!whatToDoButton || !whatToDo) {
//     console.warn(`Элементы whatToDoButton-${i} или whatToDo-${i} не найдены`);
//     continue;
//   }

//   whatToDoButton.addEventListener('click', () => {
//     whatToDo.classList.toggle('hidden');
//   });
// }

document.querySelectorAll('.whatToDoButton').forEach((button) => {
  button.addEventListener('click', () => {
    const id = button.id.split('-')[1]; // Получаем номер из id
    const whatToDo = document.getElementById(`whatToDo-${id}`);

    if (whatToDo) {
      whatToDo.classList.toggle('hidden');
    }
  });
});


//  for (let i = 1; i <= 5; i++) {
//    const whatToDoButton = document.getElementById(`whatToDoButton-${i}`);
//    const whatToDo = document.getElementById(`whatToDo-${i}`);
//    const activitiesText = document.getElementById(`activities__text-${i}`);
//    const activities = document.getElementById(`activities-${i}`);

//    whatToDoButton.addEventListener('click', () => {
//      whatToDo.classList.toggle('hidden');
//      activitiesText.classList.toggle('active');
//      activities.classList.toggle('active');
//    });
//  }

for (let i = 1; i <= 3; i++) {
  const cardButton = document.getElementById(`card-button-${i}`);
  const cardLink = document.getElementById(`card__link-${i}`);
  const card = document.getElementById(`card-${i}`);

  cardButton.addEventListener('click', () => {
    cardLink.classList.toggle('hidden');
    card.classList.toggle('active');
  });
}

