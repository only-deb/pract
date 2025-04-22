<?php
$host = 'localhost';
$dbname = 'test1_onlyde';
$username = 'test1';
$password = 'test123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedTypes)) {
            die('Ошибка: Загрузите файл в формате JPG, JPEG, PNG или GIF.');
        }

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            die('Ошибка: Не удалось загрузить файл.');
        }

        $imagePath = $uploadFile;
    } else {
        die('Ошибка: Не удалось загрузить изображение.');
    }

    $stmt = $pdo->prepare("INSERT INTO cards (title, description, image) VALUES (:title, :description, :image)");
    $stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':image' => $imagePath,
    ]);

    header('Location: index.php');
    exit();
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>