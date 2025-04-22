<?php
$botToken = '7491666049:AAEotaqqILf0xn7Ux7LnZJgHez9uEPUd7Hc';
$chatId = '1702163702';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    $text = "Новое сообщение с сайта:\n\n"
          . "Имя: $name\n"
          . "Телефон: $phone\n"
          . "Сообщение: $message";

    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    $data = [
        'chat_id' => $chatId,
        'text' => $text,
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($response === false) {
        echo "Ошибка при отправке сообщения в Telegram: " . $error;
    } else {
        echo '<!DOCTYPE html>
        <html>
        <head>
            <title>Сообщение отправлено</title>
            <meta charset="UTF-8">
        </head>
        <body>
            <p>Сообщение успешно отправлено! Перенаправление через 3 секунды...</p>
            <script>
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 3000);
            </script>
        </body>
        </html>';
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>