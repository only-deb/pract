<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление карточки</title>
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
                            <li>
                                <a href="./catalog.php">Каталог</a>
                            </li>
                            <li>
                                <a href="./contact.php">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <section class="gallery-section spad">
        <div class="container">
            <div class="col-lg-8 offset-lg-2">
                <div class="contact-form">
                    <h4>ДОБАВИТЬ КАРТОЧКУ</h4>
                    <form action="save_card.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="title" placeholder="Заголовок" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="description" placeholder="Описание" required>
                            </div>
                            <div class="col-lg-12">
                                <div class="file-input-wrapper">
                                    <label for="cardImage">Загрузить изображение</label>
                                    <input type="file" id="cardImage" name="image" accept="image/*" required>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="c-btn">Добавить карточку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row gallery-filter">
                <?php include 'load_cards.php'; ?>
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