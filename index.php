<?php
//  Подключаемся к базе данных
$db = new PDO("mysql:host=MySQL-8.2;dbname=extremetrips", "root", "");
#$db = new PDO("mysql:host=localhost;dbname=extremet_tour", "extremet_root", "av80y&kYFb4P");

//  Запрос на получение всех данных
if ($query = $db->query("SELECT * FROM extreme_tours")) {

    // Сохраняем все данные в массив
    $tours = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "<pre>";
    print_r($db->errorInfo());
    echo "</pre>";
}

// Получаем уникальные месяцы
$months = [];
$tourDataByMonth = [];

foreach ($tours as $tour) {
    $month = $tour['tour_month'];
    if (!isset($months[$month])) {
        $months[$month] = true; // Добавляем уникальный месяц
        $tourDataByMonth[$month] = $tour; // Сохраняем первый попавшийся тур для этого месяца
    }
}

$query = $db->query("SELECT COUNT(*) FROM extreme_tours");
$totalTours = $query->fetchColumn();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="тур на Драгобрат, поездка на Драгобрат, экскурсия на Драгобрат, Туры из Киева на Драгобрат, Туры с Одессы на Драгобрат, Туры со Львова на Драгобрат, тур на Боржаву, экскурсия на Синевир, тур на озеро Синевир, поездка в карпаты, туры с Киева в Карпаты, туры с Одессы в Карпаты, горнолыжные туры, зимние туры, летние туры в Карпаты, групповые туры  горы, туры в горы, 
    Тур на Драгобрат, поїздка на Драгобрат, екскурсія на Драгобрат, Тури з Києва на Драгобрат, Тури з Одеси на Драгобрат, Тури зі Львова на Драгобрат, тур на Боржаву, екскурсія на Синевир, тур на озеро Синевир, поїздка в Карпати, тури з Києва в Карпати, тури з Одеси в Карпати, гірськолижні тури, зимові тури, літні тури в Карпати, групові тури в гори, тури в гори">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Тури в карпати - Extreme Trips | Авторські тури в Карпати</title>
    <link rel="icon" href="/favicon/favicon.ico" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="js-files/wow.min.js"></script>
    <script>
              new WOW().init();
              </script>
    <style>
        
        .star {
            padding-top: 0px;
        }
        .content-wrapper {
            display: flex;
            flex-direction: row;
            padding-top: 50px;
            padding-right: 0px;

        }
        html {
            scroll-behavior: smooth;
        }   
        .link__container{
            padding-bottom: 20px; /*Отступ контейнера дат тура от нижнего края*/
        }
        .tour-item {
            display: flex;
            align-items: center;
            gap: 15px; 
             margin-bottom: -20px;  /*Добавляет расстояние между датами тура */
        }

        .link__icon img {
            width: 20px;
            /* Размер иконки, можно поменять */
            height: 20px;
        }
        .whatToDo {
            margin-top: 0px !important;
        }
        .slider-3 .slide {
            width: 335px;
            height: 340px;
            border-radius: 30px !important;
        }
        .slider-3 .slide .card__image {
            border-radius: 30px !important;
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }
        @media (min-width: 600px) {
            .card {
                width: 360px !important;
            }
            .slider-3 .slide {
                width: 360px !important;
            }
        }
    </style>
</head>

<body>
<div class="swiper-container" data-tours="<?= $totalTours ?>">
    <!-- Комментарий-->
    <div id="body__container" class="body__container">
        <div class="item left">
            <img class="item__image" src="images/Frame 12.png" alt="">
        </div>
        <div class="item right">
            <img class="item__image" src="images/Frame 12 (1).png" alt="">
        </div>
        <div class="item left">
            <img class="item__image" src="images/Frame 12.png" alt="">
        </div>
        <div class="item right">
            <img class="item__image" src="images/Frame 12 (1).png" alt="">
        </div>
        <div class="item left">
            <img class="item__image" src="images/Frame 12.png" alt="">
        </div>
    </div>
    <div id="header__container" class="header__container hidden">
        <div class="container-item item-left">
            <img class="container__image" src="images/Frame 12.png" alt="">
        </div>
        <div class="container-item item-right">
            <img class="container__image" src="images/Frame 12 (1).png" alt="">
        </div>
    </div>
    <header class="header">
    <div class="logo-desktop">
        <img src="images/logo.svg" alt="logo">
    </div>
        <ul class="nav">
            <li>
                <a class="nav__link" href="index.php">Головна</a>
            </li>
            <li>
                <a class="nav__link" href="#questions">Питання</a>
            </li>
            <li>
                <a class="nav__link" href="#contact">Контакти</a>
            </li>
            <li>
                <a class="nav__link" href="#reviews">Відгуки</a>
            </li>
            <li>
                <a class="nav__link" href="#photos">Фото</a>
            </li>
        </ul>
        <button id="menuButton" class="menu-btn">
            <img src="images/Menu_button.svg" alt="Открыть меню" id="menuIcon">
        </button>
    </header>
    <nav id="menu" class="hidden">
        <ul class="nav__links">
            <li>
                <a class="nav__text" href="index.php">Головна</a>
            </li>
            <li>
                <a class="nav__text" href="index.php.#questions">Питання</a>
            </li>
            <li>
                <a class="nav__text" href="index.php.#contact">Контакти</a>
            </li>
            <li>
                <a class="nav__text" href="index.php.#reviews">Відгуки</a>
            </li>
            <li>
                <a class="nav__text" href="index.php.#photos">Фото</a>
            </li>
        </ul>
    </nav>
    <div class="logo-mobile">
        <img src="images/logo.svg" alt="logo">
    </div>
    <main id="main" class="main">
        <div class="contact-us">
            <a class="contact-button" href="#contact"></a>
        </div>
        <section class="tours">
            <!-- <div class="tours__block">
                <p id="block__text" class="block__text">Наші тури:</p>
            </div> -->
        </section>

        
    <section class="slider slider-1">
    <div class="container swiper">
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
                <?php $index = 1; ?>
                <?php foreach ($tourDataByMonth as $month => $tour): ?>
                    <li id="card-button-<?= $index ?>" class="card-item swiper-slide">
                        <div class="slide">
                            <div id="card-<?= $index ?>" class="card">
                                <div class="card__wrapper">
                                    <div class="month">
                                        <p class="month__name"><?= htmlspecialchars($tour['tour_month']) ?></p>
                                    </div>
                                    <div class="content-wrapper">
                                        <div class="star">
                                            <img class="star__image" src="images/material-symbols_asterisk.svg" alt="star">
                                        </div>
                                        <div class="rectangle">
                                            <p class="rectangle__text"><?= $index ?>/<?= count($tourDataByMonth) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p class="description__text"><?= htmlspecialchars($tour['tour_description']) ?></p>
                                </div>
                                <div id="calendar__button-<?= $index ?>" class="card__button">
                                    <p>Переглянути календар</p>
                                </div>
                                <div id="card__link-<?= $index ?>" class="card__link hidden">
                                    <div class="link__container">
                                        <ul>
                                            <?php foreach ($tours as $tourItem): ?>
                                                <?php if ($tourItem['tour_month'] == $month): ?>
                                                    <li class="tour-item">
                                                        <div class="link__icon">
                                                            <img src="images/la_skiing.png" alt="Иконка тура">
                                                        </div>
                                                        <a class="link__text" href="/pages/details.php?id=<?= htmlspecialchars($tourItem['id']) ?>">
                                                            <div class="tours-box">
                                                                <?= htmlspecialchars($tourItem['tour_dates']) ?> - <?= htmlspecialchars($tourItem['tour_duration'])  ?>
                                                            </div>
                                                        </a>


                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $index++; ?>
                <?php endforeach; ?>
            </ul>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
        
        <section id="questions" class="questions">
    <div>
        <p class="questions__text">
            Популярні питанння:
        </p>
    </div>
</section>

<section class="slider slider-4">
    <div class="container swiper question-wrapper">
        <ul class="card-list swiper-wrapper">
            <?php
            $seen_tours = []; // Массив для отслеживания уже обработанных туров

            foreach ($tours as $index => $tour) {
                $tour_name = $tour['tour_name'];

                // Проверяем, не обработан ли уже этот тур
                if (!in_array($tour_name, $seen_tours)) {
                    $seen_tours[] = $tour_name; // Добавляем тур в список обработанных

                    ?>
                    <li data-wow-delay="<?= $index * 0.5 ?>s" id="whatToDoButton-<?= $index ?>" class="card-item swiper-slide wow animate__animated animate__fadeInUp">
                        <div class="activity">
                            <div class="slide">
                                <div id="activities-<?= $index ?>" class="activities" onclick="toggleActivities(<?= $index ?>)">
                                    <p id="activities__text-<?= $index ?>" class="activities__text">
                                        Чим зайнятися? <?= htmlspecialchars($tour_name) ?>👇🏻
                                    </p>
                                </div>
                                <div id="whatToDo-<?= $index ?>" class="whatToDo hidden">
                                    <div class="whatToDo__item">
                                        <?php
                                        // Разбиваем строку tour_activities на массив
                                        $activities = explode("\n", $tour['tour_activities']);
                                        foreach ($activities as $activity) {
                                            echo '<div class="activity-box">' . htmlspecialchars(trim($activity)) . '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
        <div class="swiper-pagination"></div>
    </div>
</section>


<script>
    function toggleActivities(index) {
        const whatToDo = document.getElementById(`whatToDo-${index}`);
        const activitiesText = document.getElementById(`activities__text-${index}`);
        const activities = document.getElementById(`activities-${index}`);
        whatToDo.classList.toggle('hidden');
        activitiesText.classList.toggle('active');
        activities.classList.toggle('active');
    }
</script>

        
<section id="contact" class="contact">
    <div class="contact__div">
        <p class="contact__text">
            Зв’язатися з менеджерами:
        </p>
    </div>
    <div class="form-container">
    <iframe name="hiddenFrame" style="display: none;"></iframe>

<div id="formContainer">
    <form action="send_mail.php" method="POST" target="hiddenFrame" id="contactForm">
        <div class="input-wrapper">
            <img class="icon" src="images/name-icon.svg" alt="">
            <input class="input" type="text" name="user_name" placeholder="Введіть ваше ім'я" required>
        </div>
        <div class="input-wrapper">
            <img class="icon" src="images/tel-icon.svg" alt="">
            <input class="input" type="tel" name="user_phone" placeholder="Введіть ваш номер телефону" required>
        </div>
        <button class="form-button" type="submit">ЗАМОВИТИ ДЗВІНОК</button>
    </form>
</div>
    </div>
</section>

<script>
document.getElementById("contactForm").addEventListener("submit", function() {
    // Заменяем форму на сообщение через небольшую задержку
    setTimeout(() => {
        document.getElementById("formContainer").innerHTML = `
            <div style="color: #FFFFFF" class="success-message">
                <p>Ваші дані передано,<br>
                наші туристичні котики<br>
                 зв’яжуться з Вами!</p>
                 <img style="padding-top: 25px" src="images/cat.svg">
            </div>
        `;
    }, 300);
});
</script> 

        <section id="reviews" class="reviews">
            <div class="your-reviews">
                <p class="reviews__text">
                    Відгуки:
                </p>
            </div>
        </section>

        <section class="slider slider-2">
            <div class="container swiper reviews-wrapper">
                <ul class="card-list swiper-wrapper">
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <div class="card">
                                <div class="card__container">
                                    <div class="container__image">
                                        <img style="width: 95px; height: 95px; border-radius: 50%" src="images/kate-photo2.jpg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Катя
                                        </p>
                                        <p class="info__date">
                                            20.12.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p style="font-size: 14px;">
                                        Дякую найкращому гіду в світі за супровід <br>
                                        і всім за чудову компанію &#128151;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <div class="card">
                                <div class="card__container">
                                    <div class="container__image">
                                        <img style="width: 95px; height: 95px; border-radius: 50%" src="images/ivan-photo2.jpg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Іван
                                        </p>
                                        <p class="info__date">
                                            15.02.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p style="font-size: 14px;">
                                        Всім дуже дякую за цей крутий тріп,
                                        атмосферу, емоції і ваші посмішки
                                        якими ви заряджали весь цей час,
                                        ви суперові &#128525;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <div class="card">
                                <div class="card__container">
                                    <div class="container__image">
                                        <img style="width: 95px; height: 95px; border-radius: 50%" src="images/ann-photo.jpg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Аня
                                        </p>
                                        <p class="info__date">
                                            8.01.2023
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p style="font-size: 14px;">
                                        Ми з сестрою безмежно вдячні за <br> 
                                        цей багаж емоцій і досвіду, ви дуже чудесна <br>
                                        компанія, і звісно гід заслуговує окремих теплих слів. <br>
                                        <br>
                                        Ще раз дякую вам за цей час &#128512;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <div class="card">
                                <div class="card__container">
                                    <div class="container__image">
                                        <img style="width: 95px; height: 95px; border-radius: 50%" src="images/polina-photo.jpg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Поліна
                                        </p>
                                        <p class="info__date">
                                            06.09.2024
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p style="font-size: 14px;">
                                        Дуже дякую за атмосферу! Як завжди все 
                                        супер круто &#128293; <br>
                                        До зустрічі зимою &#128507;

                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <div class="card">
                                <div class="card__container">
                                    <div class="container__image">
                                        <img style="width: 95px; height: 95px; border-radius: 50%" src="images/bojena-photo.jpg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Божена
                                        </p>
                                        <p class="info__date">
                                            10.09.2024
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p style="font-size: 14px;">
                                        Дуууже дякую всім за вайби &#128293; сейм,
                                        до зустрічі зимою &#10084; ви всі інкредібл! 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section id="photos" class="photos">
            <div class="your-photos">
                <p class="photos__text">
                    Фотоархів:
                </p>
            </div>
        </section>

        <section class="slider slider-3">
            <div class="container swiper photos-wrapper">
                <ul class="card-list swiper-wrapper">
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/photo1.jpg" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/photo2.JPG" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/photo3.JPG" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/photo4.jpg" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/photo5.JPG" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/photo6.JPG" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/photo7.JPG" alt="">
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
    </main>
    <section id="footer" class="footer">
        <div class="public-info">
            <a href="images/public-info-doc.docx.pdf" class="info__link" download="">Публічна оферта</a>
        </div>
        <div class="socials">
            Ми в соц.мережах:
        </div>
        <div class="socials-items">
            <div class="item__icon">
                <a class="item__link" href="https://www.instagram.com/extreme__trips?igsh=MWd1d2l5dDFsNzNuMA==">
                    <img class="icon__image" src="images/instagram_png.png" alt="">
                </a>
                <a class="item__link" href="https://www.facebook.com/ExtremeTripsUkr">
                    <img class="icon__image" src="images/fb_png.png" alt="">
                </a>
                <a class="item__link" href="https://t.me/exteme_trips">
                    <img class="icon__image" src="images/tg_png.png" alt="">
                </a>
                <a class="item__link" href="https://www.threads.net/@extreme__trips?igshid=NTc4MTIwNjQ2YQ==">
                    <img class="icon__image" src="images/threads_png.png" alt="">
                </a>
            </div>
        </div>
        <div class="powered-by">
            © Powered by Pixel Guard IT
        </div>
        <div class="powered-by">
            Developed by Philip Kokurenchuk & Yaroslav Khodun
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js-files/script.js"></script>
</body>

</html>