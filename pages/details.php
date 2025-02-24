<?php
// Подключение к базе данных
$db = new PDO("mysql:host=MySQL-8.2;dbname=extremetrips", "root", "");

// Получение параметра id из URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id > 0) {
    // Запрос на выборку данных по ID
    $query = $db->prepare("SELECT * FROM extreme_tours WHERE id = :id");
    $query->execute(['id' => $id]);

    // Получение данных
    $tour = $query->fetch(PDO::FETCH_ASSOC);

    // Если запись найдена
    if ($tour) {
        $tour_name = htmlspecialchars($tour['tour_name']);
        $tour_dates = htmlspecialchars($tour['tour_dates']);
        $tour_duration = htmlspecialchars($tour['tour_duration']);
        $tour_description = htmlspecialchars($tour['tour_description']);
    } else {
        echo "Тур с таким ID не найден.";
    }
} else {
    echo "Неверный ID.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="тур на Драгобрат, поездка на Драгобрат, экскурсия на Драгобрат, Туры из Киева на Драгобрат, Туры с Одессы на Драгобрат, Туры со Львова на Драгобрат, тур на Боржаву, экскурсия на Синевир, тур на озеро Синевир, поездка в карпаты, туры с Киева в Карпаты, туры с Одессы в Карпаты, горнолыжные туры, зимние туры, летние туры в Карпаты, групповые туры  горы, туры в горы, 
    Тур на Драгобрат, поїздка на Драгобрат, екскурсія на Драгобрат, Тури з Києва на Драгобрат, Тури з Одеси на Драгобрат, Тури зі Львова на Драгобрат, тур на Боржаву, екскурсія на Синевир, тур на озеро Синевир, поїздка в Карпати, тури з Києва в Карпати, тури з Одеси в Карпати, гірськолижні тури, зимові тури, літні тури в Карпати, групові тури в гори, тури в гори">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Тури в карпати - Extreme Trips | Авторські тури в Карпати</title>
    <link rel="icon" href="/favicon/favicon.ico" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../details-styles/details.css">
</head>
<body>
    <div id="body__container" class="body__container">
        <div class="item left">
            <img class="item__image" src="../images/Frame 12.png" alt="">
        </div>
        <div class="item right">
            <img class="item__image" src="../images/Frame 12 (1).png" alt="">
        </div>
    </div>
    <div id="header__container" class="header__container hidden">
        <div class="container-item item-left">
            <img class="container__image" src="../images/Frame 12.png" alt="">
        </div>
        <div class="container-item item-right">
            <img class="container__image" src="../images/Frame 12 (1).png" alt="">
        </div>
    </div>
    <header class="header">
        <div class="logo">
            <img src="../images/logo.svg" alt="logo">
        </div>
        <ul class="nav">
            <li>
                <a class="nav__link" href="../index.php">Головна</a>
            </li>
            <li>
                <a class="nav__link" href="booking.php">Бронювання</a>
            </li>
        </ul>
        <button id="menuButton" class="menu-btn">
            <img src="../images/Menu_button.svg" alt="Открыть меню" id="menuIcon">
        </button>
    </header>
    <nav id="menu" class="hidden">
        <ul>
            <li>
                <a class="nav__text" href="../index.php">Головна</a>
            </li>
            <li>
                <a class="nav__text" href="booking.php">Бронювання</a>
            </li>
        </ul>
    </nav>
    <section id="main" class="main">
        <section class="details-about">
            <div class="back-arrow">
                <a class="arrow__link" href="../index.php">
                    <img src="../images/Button_back_to_page.png" alt="" class="arrow__img">
                </a>
            </div>
            <div class="navigation-block">
                <div class="main-page">
                    <p class="main__text">
                        <a class="main__link" href="../index.php">Головна</a>
                    </p>
                </div>
                <div class="arrow">
                    <img src="../images/arrow.png" alt="" class="arrow__img">
                </div>
                <div class="details-page">
                    <div class="details__text">
                        Деталі
                    </div>
                </div>
            </div>
            <div class="tour-title">
                <p class="title__text">
                    Деталі туру:
                </p>
            </div>
            <div class="banner">
                <div class="banner__wrapper">
                    <div class="trip__title">
                        <p class="title__text">
                        <?php echo htmlspecialchars($tour['tour_name']); ?>
                        </p>
                    </div>
                    <div class="trip__date">
                        <p class="date__text">
                        <?php echo htmlspecialchars($tour['tour_dates']); ?> 
                        </p>
                    </div>
                    <div class="trip__duration">
                        <p class="duration__text">
                        <?php echo htmlspecialchars($tour['tour_duration']); ?>
                        </p>
                    </div>
                </div> 
            </div>
        </section>
        <section class="slider slider-4">
            <div class="container swiper question-wrapper">
                <ul class="card-list swiper-wrapper">
                    <li id="whatToDoButton-1" class="card-item swiper-slide">
                        <div class="activity">
                            <div class="slide">
                                <div id="activities-1" class="activities">
                                    <p id="activities__text-1" class="activities__text">
                                        Розклад туру?👇🏻
                                    </p>
                                </div>
                                <div id="whatToDo-1" class="whatToDo hidden">
                                    <div class="whatToDo__item">
                                    <?php echo htmlspecialchars($tour['tour_schedule']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="whatToDoButton-2" class="card-item swiper-slide">
                        <div class="activity">
                            <div class="slide">
                                <div id="activities-2" class="activities">
                                    <p id="activities__text-2" class="activities__text">
                                        Програма туру?👇🏻
                                    </p>
                                </div>
                                <div id="whatToDo-2" class="whatToDo hidden">
                                    <div class="whatToDo__item">
                                    <?php echo htmlspecialchars($tour['tour_fulldescription']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="whatToDoButton-3" class="card-item swiper-slide">
                        <div class="activity">
                            <div class="slide">
                                <div id="activities-3" class="activities">
                                    <p id="activities__text-3" class="activities__text">
                                        Проживання?👇🏻
                                    </p>
                                </div>
                                <div id="whatToDo-3" class="whatToDo hidden">
                                    <div class="whatToDo__item">
                                    <?php echo htmlspecialchars($tour['tour_accomodation']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="details">
            <div class="details__wrapper">
                <div class="details__title">
                    <p class="title__text">Вартість поїздки</p>
                </div>
                <div class="details__description">
                    <p class="description__text">Нижче вказано ціну за тур за 1 людину (за 1<br>
                        місце в номері). Зараз ви оплачуєте тільки<br>
                        аванс 2000 грн, а залишок оплачується<br>
                        безпосередньо у день події.
                    </p>
                </div>
                <div class="details__cost">
                    <div class="cost__number">
                        <p class="number__text">
                            За 1 людину
                        </p>
                    </div>
                    <div class="price">
                        <p class="price__text">
                        <?php echo htmlspecialchars($tour['tour_price']); ?> грн
                        </p>
                    </div>
                </div>
                <a class="booking__button"
                                                            href="/pages/booking.php?id=<?= htmlspecialchars($tour['id']) ?>">
                                                            <p class="button__text">забронювати</p>
                                                        </a>
            </div>
            
        </section>
    </section>
    <section id="footer" class="footer">
        <div class="public-info">
            <a href="../images/public-info-doc.docx.pdf" class="info__link" download="">Публічна оферта</a>
        </div>
        <div class="socials">
            Ми в соц.мережах:
        </div>
        <div class="socials-items">
            <div class="item__icon">
                <a class="item__link" href="https://www.instagram.com/extreme__trips?igsh=MWd1d2l5dDFsNzNuMA==">
                    <img class="icon__image" src="../images/inst_desktop.png" alt="">
                </a>
            </div>
        </div>
        <div class="powered-by">
            © Powered by Pixel Guard IT
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js-files/details.js"></script>
</body>
</html>
