<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/database.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new Database();
    $connection = $db->getConnection();

    $doctor_name = $_POST['doctor_name'] ?? null;
    $actor_name = $_POST['actor_name'] ?? null;
    $actor_photo = $_POST['actor_photo'] ?? null;
    $years_active = $_POST['years_active'] ?? null;
    $doctor_desc = $_POST['doctor_desc'] ?? null;
    $featured = isset($_POST['featured']) ? 1 : 0;
    $actor_photo = null;
    if (isset($_FILES['actor_photo']) && $_FILES['actor_photo']['error'] == 0) {
        $actor_photo = file_get_contents($_FILES['actor_photo']['tmp_name']);
    }

    if (!empty($doctor_name) && !empty($actor_name) && !empty($years_active) && !empty($doctor_desc) && $actor_photo !== null) {
        try {
            $sql = "INSERT INTO doctors (doctor_name, actor_name, actor_photo, years_active, doctor_desc, featured) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $connection->prepare($sql);
            $stmt->execute([$doctor_name, $actor_name, $actor_photo, $years_active, $doctor_desc, $featured]);

            echo "Obsah bol úspešne uložený.";
            header("Location: ../../adm/doctor-list.php");
            exit;
        } catch (PDOException $e) {
            echo "Chyba pri ukladaní: " . $e->getMessage();
        }
    } else {
        echo "<p>Všetky požadované polia musia byť vyplnené. Chyba je dole.</p>";
        echo "<a class='link' href='../../adm/doctor-add.php'>Späť</a>";
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        echo "</pre>";
    }
}
?>
