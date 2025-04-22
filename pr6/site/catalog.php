<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <header class="header-section">
        <div class="container-fluid">
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li>
                                <a href="./index.php">Главная</a>
                            </li>
                            <li>
                                <a href="./about-us.php">О нас</a>
                            </li>
                            <li class="active">
                                <a href="./catalog.php">Каталог</a>
                            </li>
                            <li>
                                <a href="./contact.php">Контакты</a>
                            </li>
                            <li><a href="./create-cars.php">Добавить авто</a>
                                </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Каталог</h2>
                        <div class="breadcrumb-controls"> <a href="#"><i class="fa fa-home"></i> Главная</a>
                            <span>Каталог</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section spad">
        <div class="container">
            <div class="row gallery-filter">
                <div class="row gallery-filter">
                    <?php include 'load_cards.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h3>Купи свой автомобиль уже сегодня</h3>
                        <p>При покупке 2-х автомобилей скидка 20%</p>
                    </div> <a href="#" class="primary-btn cta-btn">Связаться</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-section">
        <div class="container">
            <div class="row" style="text-align: left; justify-content: center;">
                <div class="col-lg-3">
                    <div class="footer-logo-item">
                        <p>Только новые авто – без пробега, с полным пакетом документов и заводской гарантией.</p>
                        <p>Превосходное качество – немецкая инженерия, надежные материалы и передовые технологии.</p>
                        <p>Индивидуальный подход – поможем подобрать идеальный вариант под ваши потребности и бюджет..
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>ССылки</h5>
                        <ul class="workout-program">
                            <li>
                                <a href="index.php">Главная</a>
                            </li>
                            <li>
                                <a href="about-us.php">О нас</a>
                            </li>
                            <li>
                                <a href="catalog.php">Каталог</a>
                            </li>
                            <li>
                                <a href="contact.php">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Контакты</h5>
                        <ul class="footer-info">
                            <li> <i class="fa fa-phone"></i> <span>Телефон:</span>
                                (12) 345 6789
                            </li>
                            <li> <i class="fa fa-envelope-o"></i> <span>Email:</span>
                                info@site.ru
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i> <span>Адрес</span>
                                Краснодар, ул. Красная 102
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside">
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>