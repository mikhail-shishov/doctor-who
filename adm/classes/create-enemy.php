<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/database.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new Database();
    $connection = $db->getConnection();

    $title = $_POST['title'] ?? null;
    $summary = $_POST['summary'] ?? null;
    // $photo = $_POST['photo'] ?? null;
    $video = $_POST['video'] ?? null;
    $quote = $_POST['quote'] ?? null;

    $photo = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $photo = file_get_contents($_FILES['photo']['tmp_name']);
    }

    if (!empty($title) && !empty($summary) && $photo !== null) {
        try {
            $sql = "INSERT INTO enemies (title, summary, photo, video, quote) VALUES (?, ?, ?, ?, ?)";
            $stmt = $connection->prepare($sql);
            $stmt->execute([$title, $summary, $photo, $video, $quote]);

            echo "Obsah bol úspešne uložený.";
            header("Location: ../../adm/enemy-list.php");
            exit;
        } catch (PDOException $e) {
            echo "Chyba pri ukladaní: " . $e->getMessage();
        }
    } else {
        echo "<p>Všetky požadované polia musia byť vyplnené. Chyba je dole.</p>";
        echo "<a class='link' href='../../adm/enemy-add.php'>Späť</a>";
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        echo "</pre>";
    }
}
