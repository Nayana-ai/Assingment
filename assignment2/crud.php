<?php
$host = 'localhost';
$dbname = 'resume_database';
$username = 'username';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
            $stmt = $pdo->prepare("INSERT INTO profile (name, email, phone) VALUES (?, ?, ?)");
            $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone']]);
        }
    }
    $stmt = $pdo->query("SELECT * FROM profile");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    }

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>