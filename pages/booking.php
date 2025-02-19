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
    <title>Тури в карпати - Extreme Trips | Авторські тури в Карпати</title>
    <link rel="icon" href="/favicon/favicon.ico" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../booking-styles/booking.css">
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
        <section class="navigation">
            <div class="back-arrow">
                <a class="arrow__link" href="javascript:history.back()">
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
                        <a class="details__link" href="javascript:history.back()">Деталі</a>
                    </div>
                </div>
                <div class="arrow">
                    <img src="../images/arrow.png" alt="" class="arrow__img">
                </div>
                <div class="booking-page">
                    <div class="booking__text">
                        Бронювання
                    </div>
                </div>
            </div>
        </section>
        <section class="tour">
            <div class="tour__mobile">
                <div class="mobile__wrapper">
                    <div class="wrapper__tour">
                        <p class="tour__text">
                        <?php echo htmlspecialchars($tour['tour_name']); ?>
                        </p>
                    </div>
                    <div class="wrapper__date">
                        <p class="date__text">
                        <?= htmlspecialchars($tour['tour_dates']) ?>  (<?= htmlspecialchars($tour['tour_duration'])  ?>)
                        </p>
                    </div>
                </div>
            </div>
            <div class="tour__desktop">
                <div class="banner">
                    <div class="banner__wrapper">
                        <div class="trip__title">
                            <p class="title__text">
                            <?php echo htmlspecialchars($tour_name); ?>
                            </p>
                        </div>
                        <div class="trip__date">
                            <p class="date__text">
                                <?= htmlspecialchars($tour['tour_dates']) ?>   
                            </p>
                        </div>
                        <div class="trip__duration">
                            <p class="duration__text">
                            <?= htmlspecialchars($tour['tour_duration'])  ?>
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <section class="form">
                <form action="../send_booking.php" method="POST">
                    <input type="hidden" name="tour_name" value="<?= htmlspecialchars($tour['tour_name']) ?>">
                    <input type="hidden" name="tour_dates" value="<?= htmlspecialchars($tour['tour_dates']) ?>">
                    <input type="hidden" name="tour_duration" value="<?= htmlspecialchars($tour['tour_duration']) ?>">
                    

                    <div class="form__container">
                        <p class="contact__text">Крок 1: Контактна інформація</p>
                        <div class="block__contact">
                            <img class="icon" src="../images/email-icon.svg" alt="">
                            <input class="input" type="email" name="email" placeholder="Введіть вашу пошту" required>
                        </div>
                        <p class="person__text">Персона 1</p>
                        <div class="block__person">
                            <img class="icon" src="../images/name-icon.svg" alt="">
                            <input class="input" type="text" name="name" placeholder="Введіть ваше ім'я та прізвище" required>
                        </div>
                        <div class="block__person">
                            <img class="icon" src="../images/date-icon.svg" alt="">
                            <input class="input" type="text" name="date_birth" placeholder="Введіть вашу дату народження" required>
                        </div>
                        <div class="block__person">
                            <img class="icon" src="../images/tel-icon.svg" alt="">
                            <input class="input" type="text" name="phone" placeholder="Введіть ваш номер телефону" required>
                        </div>
                        <div class="block__person">
                            <img class="icon" src="../images/cityfrom-icon.svg" alt="">
                            <input class="input" type="text" name="city_from" placeholder="Місце від'їзду" required>
                        </div>
                        <div id="addContainer" class="addContainer"></div>
                        <div class="add-person">
                            <button id="add__button" class="add__button">
                                <img src="../images/Button_add person_desktop.svg" alt="" class="button__img">
                            </button>
                            <div class="add__block">
                                <p class="block__title">
                                    Додати людину
                                </p>
                                <p class="block__desc">
                                    Разом веселіше!
                                </p>
                            </div>
                        </div>
                        <div class="comment">
                            <textarea  name="comment" class="comment__area" placeholder="Складіть загальний коментар до замовлення"></textarea>
                        </div>
                        <div class="acception__block">
                            <img class= "acception__icon" src="../images/accept-icon.svg" alt="">
                            <p class="acception__text">
                                Бронюючи подію, я підтверджую згоду з <a href="../images/public-info-doc.docx.pdf" download="">договіром оферти</a>
                            </p>
                        </div>
                        <div class="accept-button" type="submit">
                            <button>забронювати</button>
                        </div>
                    </div>
                </form>
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
            © Powered by Philip Kokurenchuk
            Pixel Guard IT
        </div>
    </section>
    <script src="../js-files/booking.js"></script>
</body>
</html>