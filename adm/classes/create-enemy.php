<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/database.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new Database();
    $connection = $db->getConnection();

    $enemy_name = $_POST['enemy_name'] ?? null;
    $enemy_desc = $_POST['enemy_desc'] ?? null;
    // $enemy_photo = $_POST['enemy_photo'] ?? null;
    $enemy_video = $_POST['enemy_video'] ?? null;
    $enemy_quote = $_POST['enemy_quote'] ?? null;

    $enemy_photo = null;
    if (isset($_FILES['enemy_photo']) && $_FILES['enemy_photo']['error'] == 0) {
        $enemy_photo = file_get_contents($_FILES['enemy_photo']['tmp_name']);
    }

    if (!empty($enemy_name) && !empty($enemy_desc) && $enemy_photo !== null) {
        try {
            $sql = "INSERT INTO enemies (enemy_name, enemy_desc, enemy_photo, enemy_video, enemy_quote) VALUES (?, ?, ?, ?, ?)";
            $stmt = $connection->prepare($sql);
            $stmt->execute([$enemy_name, $enemy_desc, $enemy_photo, $enemy_video, $enemy_quote]);

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
?>
