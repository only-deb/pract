<?php
$host = 'localhost';
$dbname = 'test1_onlyde';
$username = 'test1';
$password = 'test123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM cards");
    $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($cards as $card) {
        echo '
        <div class="col-lg-4 col-sm-6 mix crossfit workout">
            <div class="gallery-item">
                <img src="' . $card['image'] . '" alt="">
                <div class="gi-hover-warp">
                    <div class="gi-hover">
                        <a href="' . $card['image'] . '" class="image-popup"><i class="fa fa-search-plus"></i></a>
                        <a href="#"><i class="fa fa-chain"></i></a>
                        <h6>' . $card['title'] . ' <span>' . $card['description'] . '</span></h6>
                    </div>
                </div>
            </div>
        </div>';
    }
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>