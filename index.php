<?php
//  Подключаемся к базе данных
$db = new PDO("mysql:host=MySQL-8.2;dbname=extremetrips", "root", "");

//  Запрос на получение всех данных
if ($query = $db->query("SELECT * FROM extreme_tours")) {

    // Сохраняем все данные в массив
    $tours = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "<pre>";
    print_r($db->errorInfo());
    echo "</pre>";
}
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
    <style>
        .link__container{
            padding-bottom: 20px; /*Отступ контейнера дат тура от нижнего края*/
        }
        .tour-item {
            display: flex;
            align-items: center;
            gap: 10px; 
             margin-bottom: -20px;  /*Добавляет расстояние между датами тура */
        }

        .link__icon img {
            width: 20px;
            /* Размер иконки, можно поменять */
            height: 20px;
        }
    </style>
</head>

<body>
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
        <div class="logo">
            <img src="images/logo.svg" alt="logo">
        </div>
        <ul class="nav">
            <li>
                <a class="nav__link" href="index.html">Головна</a>
            </li>
            <li>
                <a class="nav__link" href="/pages/booking.html">Бронювання</a>
            </li>
        </ul>
        <button id="menuButton" class="menu-btn">
            <img src="images/Menu_button.svg" alt="Открыть меню" id="menuIcon">
        </button>
    </header>
    <nav id="menu" class="hidden">
        <ul>
            <li>
                <a class="nav__text" href="index.html">Головна</a>
            </li>
            <li>
                <a class="nav__text" href="booking.html">Бронювання</a>
            </li>
        </ul>
    </nav>
    <main id="main" class="main">
        <div class="contact-us">
            <a class="contact-button" href="#contact"></a>
        </div>
        <section class="tours">
            <div class="tours__block">
                <p id="block__text" class="block__text">Наші тури:</p>
            </div>
        </section>
        <!-- Тут начинается слайдер -->
        <section class="slider">
            <div class="container swiper">
                <div class="card-wrapper">
                    <ul class="card-list swiper-wrapper">
                        <!-- Тут начинается первая плитка -->
                        <li id="card-button-1" class="card-item swiper-slide">
                            <div class="slide">
                                <div id="card-1" class="card">
                                    <div class="card__wrapper">
                                        <div class="month">
                                            <p class="month__name">
                                                <?php
                                                foreach ($tours as $tour) {
                                                    if ($tour['tour_month'] == 'Січень') {
                                                        echo htmlspecialchars($tour['tour_name']);
                                                        break; // Прерываем цикл после первого совпадения
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="star">
                                            <img class="star__image" src="images/material-symbols_asterisk.svg"
                                                alt="star">
                                        </div>
                                        <div class="rectangle">
                                            <p class="rectangle__text">1/3</p>
                                        </div>
                                    </div>
                                    <div class="card__description">
                                        <p class="description__text">
                                            <?php
                                            foreach ($tours as $tour) {
                                                if ($tour['tour_month'] == 'Січень') {
                                                    echo htmlspecialchars($tour['tour_description']);
                                                    break; // Прерываем цикл после первого совпадения
                                                }
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <!-- Тут начинается перечень дат тура -->
                                    <div id="card__link-1" class="card__link hidden">
                                        <div class="link__container">
                                            <!-- 4️⃣ Вывод данных в виде списка -->
                                            <ul>
                                                <?php foreach ($tours as $tour): ?>
                                                    <?php if ($tour['tour_month'] == 'Січень'): ?> <!-- Проверка на месяц -->
                                                        <li class="tour-item">
                                                            <div class="link__icon">
                                                                <img src="images/la_skiing.png" alt="Иконка тура">
                                                            </div>
                                                            <!-- Делаем даты тура гиперссылкой с ID -->
                                                            <a class="link__text" href="/pages/details.php?id=<?= htmlspecialchars($tour['id']) ?>">
                                                                <?= htmlspecialchars($tour['tour_dates']) ?> - <?= htmlspecialchars($tour['tour_duration']) ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                            <!-- Тут даты туров заканчиваются -->
                                        </div>
                                    </div>
                        </li>
                        <li id="card-button-2" class="card-item swiper-slide">
                            <div class="slide">
                                <div id="card-2" class="card">
                                    <div class="card__wrapper">
                                        <div class="month">
                                            <p class="month__name">
                                                <?php
                                                foreach ($tours as $tour) {
                                                    if ($tour['tour_month'] == 'Лютий') {
                                                        echo htmlspecialchars($tour['tour_name']);
                                                        break; // Прерываем цикл после первого совпадения
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="star">
                                            <img class="star__image" src="images/material-symbols_asterisk.svg"
                                                alt="star">
                                        </div>
                                        <div class="rectangle">
                                            <p class="rectangle__text">2/3</p>
                                        </div>
                                    </div>
                                    <div class="card__description">
                                        <p class="description__text">
                                            <?php
                                            foreach ($tours as $tour) {
                                                if ($tour['tour_month'] == 'Лютий') {
                                                    echo htmlspecialchars($tour['tour_description']);
                                                    break; // Прерываем цикл после первого совпадения
                                                }
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div id="card__link-2" class="card__link hidden">
                                        <div class="link__container">
                                            <ul>
                                            <?php foreach ($tours as $tour): ?>
                                                <?php if ($tour['tour_month'] == 'Лютий'): ?> <!-- Проверка на месяц -->
                                                    <li class="tour-item">
                                                        <div class="link__icon">
                                                            <img src="images/la_skiing.png" alt="Иконка тура">
                                                        </div>
                                                        <!-- Делаем даты тура гиперссылкой с ID -->
                                                        <a class="link__text" href="/pages/details.php?id=<?= htmlspecialchars($tour['id']) ?>">
                                                            <?= htmlspecialchars($tour['tour_dates']) ?> - <?= htmlspecialchars($tour['tour_duration']) ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li id="card-button-3" class="card-item swiper-slide">
                            <div class="slide">
                                <div id="card-3" class="card">
                                    <div class="card__wrapper">
                                        <div class="month">
                                            <p class="month__name">
                                                <?php
                                                foreach ($tours as $tour) {
                                                    if ($tour['tour_month'] == 'Березень') {
                                                        echo htmlspecialchars($tour['tour_name']);
                                                        break; // Прерываем цикл после первого совпадения
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="star">
                                            <img class="star__image" src="images/material-symbols_asterisk.svg"
                                                alt="star">
                                        </div>
                                        <div class="rectangle">
                                            <p class="rectangle__text">3/3</p>
                                        </div>
                                    </div>
                                    <div class="card__description">
                                        <p class="description__text">
                                            <?php
                                            foreach ($tours as $tour) {
                                                if ($tour['tour_month'] == 'Березень') {
                                                    echo htmlspecialchars($tour['tour_description']);
                                                    break; // Прерываем цикл после первого совпадения
                                                }
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div id="card__link-3" class="card__link hidden">
                                        <div class="link__container">
                                            <ul>
                                            <?php foreach ($tours as $tour): ?>
                                                <?php if ($tour['tour_month'] == 'Березень'): ?> <!-- Проверка на месяц -->
                                                    <li class="tour-item">
                                                        <div class="link__icon">
                                                            <img src="images/la_skiing.png" alt="Иконка тура">
                                                        </div>
                                                        <!-- Делаем даты тура гиперссылкой с ID -->
                                                        <a class="link__text" href="/pages/details.php?id=<?= htmlspecialchars($tour['id']) ?>">
                                                            <?= htmlspecialchars($tour['tour_dates']) ?> - <?= htmlspecialchars($tour['tour_duration']) ?>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </li>
                    </ul>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <!-- Тут слайдер заканчивается -->
        </section>
        
        <section class="questions">
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
            // Группируем туры по их названию
            $groupedTours = [];
            foreach ($tours as $tour) {
                $groupedTours[$tour['tour_name']][] = $tour;
            }

            // Сортируем туры по нужным месяцам
            $tourNames = ['Драгобрат', 'Буковель', 'Боржомі'];

            // Выводим блоки по группам
            foreach ($tourNames as $tourName) {
                // Если есть туры с этим названием, выводим их
                if (isset($groupedTours[$tourName])) {
                    foreach ($groupedTours[$tourName] as $index => $tour) {
                        ?>
                        <li id="whatToDoButton-<?= $index ?>" class="card-item swiper-slide">
                            <div class="activity">
                                <div class="slide">
                                    <div id="activities-<?= $index ?>" class="activities" onclick="toggleActivities(<?= $index ?>)">
                                        <p class="activities__text">
                                            Чим зайнятися на <?= htmlspecialchars($tourName) ?>?👇🏻
                                        </p>
                                    </div>
                                    <div id="whatToDo-<?= $index ?>" class="whatToDo hidden">
                                        <div class="whatToDo__item">
                                            <?php
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
            }
            ?>
        </ul>
        <div class="swiper-pagination"></div>
    </div>
</section>



<script>
    function toggleActivities(index) {
        document.getElementById(`whatToDo-${index}`).classList.toggle('hidden');
    }
</script>

        </section>
        <section id="contact" class="contact">
            <div class="contact__div">
                <p class="contact__text">
                    Зв’язатися з менеджерами:
                </p>
            </div>
            <div class="form-container">
                <form action="send_mail.php" name="form" method="POST">
                    <div class="input-wrapper">
                        <img class="icon" src="images/name-icon.svg" alt="">
                        <input class="input" type="text" name="user_name" placeholder="Введіть ваше ім'я" required>
                    </div>
                    <div class="input-wrapper">
                        <img class="icon" src="images/tel-icon.svg" alt="">
                        <input class="input" type="tel" name="user_phone" placeholder="Введіть ваш номер телефону"
                            required>
                    </div>
                    <button class="form-button" type="submit">ЗАМОВИТИ ДЗВІНОК</button>
                </form>
            </div>
        </section>
        <section class="reviews">
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
                                        <img src="images/Ellipse 2.svg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Андрій
                                        </p>
                                        <p class="info__date">
                                            10.03.2021
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit. Sed ullamcorper, magna et iaculis dictum, velit<br>
                                        diam efficitur metus, in dapibus odio lectus non<br>
                                        nibh. Nam ut tempus mi. Aliquam aliquam nisi non<br>
                                        libero vehicula porttitor. Fusce et tincidunt risus. In<br>
                                        commodo faucibus lectus faucibus molestie.
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
                                        <img src="images/Ellipse 2.svg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Андрій
                                        </p>
                                        <p class="info__date">
                                            10.03.2021
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit. Sed ullamcorper, magna et iaculis dictum, velit<br>
                                        diam efficitur metus, in dapibus odio lectus non<br>
                                        nibh. Nam ut tempus mi. Aliquam aliquam nisi non<br>
                                        libero vehicula porttitor. Fusce et tincidunt risus. In<br>
                                        commodo faucibus lectus faucibus molestie.
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
                                        <img src="images/Ellipse 2.svg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Андрій
                                        </p>
                                        <p class="info__date">
                                            10.03.2021
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit. Sed ullamcorper, magna et iaculis dictum, velit<br>
                                        diam efficitur metus, in dapibus odio lectus non<br>
                                        nibh. Nam ut tempus mi. Aliquam aliquam nisi non<br>
                                        libero vehicula porttitor. Fusce et tincidunt risus. In<br>
                                        commodo faucibus lectus faucibus molestie.
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
                                        <img src="images/Ellipse 2.svg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Андрій
                                        </p>
                                        <p class="info__date">
                                            10.03.2021
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit. Sed ullamcorper, magna et iaculis dictum, velit<br>
                                        diam efficitur metus, in dapibus odio lectus non<br>
                                        nibh. Nam ut tempus mi. Aliquam aliquam nisi non<br>
                                        libero vehicula porttitor. Fusce et tincidunt risus. In<br>
                                        commodo faucibus lectus faucibus molestie.
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
                                        <img src="images/Ellipse 2.svg" alt="">
                                    </div>
                                    <div class="card__info">
                                        <p class="info__name">
                                            Андрій
                                        </p>
                                        <p class="info__date">
                                            10.03.2021
                                        </p>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit. Sed ullamcorper, magna et iaculis dictum, velit<br>
                                        diam efficitur metus, in dapibus odio lectus non<br>
                                        nibh. Nam ut tempus mi. Aliquam aliquam nisi non<br>
                                        libero vehicula porttitor. Fusce et tincidunt risus. In<br>
                                        commodo faucibus lectus faucibus molestie.
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
        <section class="photos">
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
                            <img class="card__image " src="images/Photo_desktop.png" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/Photo_desktop.png" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/Photo_desktop.png" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/Photo_desktop.png" alt="">
                        </div>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="slide">
                            <img class="card__image " src="images/Photo_desktop.png" alt="">
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
                    <img class="icon__image" src="images/inst_desktop.png" alt="">
                </a>
            </div>
        </div>
        <div class="powered-by">
            © Powered by Philip Kokurenchuk
            Pixel Guard IT
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js-files/script.js"></script>
</body>

</html>