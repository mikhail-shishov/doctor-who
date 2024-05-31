<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/enemy.php');

session_start();

$id = $_GET["id"];
$enemy = new enemy();

$row = $enemy->getEnemyById(intval($id));

if (!$row) {
    echo "Nepriateĺ s daným ID nebol najdený.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['enemy_photo']) && $_FILES['enemy_photo']['error'] === UPLOAD_ERR_OK) {
        $enemy_photo = file_get_contents($_FILES['enemy_photo']['tmp_name']);
    } else {
        $enemy_photo = $row['enemy_photo'];
    }
    $featured = isset($_POST['featured']) ? 1 : 0;
    $enemy->updateEnemy($id, $_POST['enemy_name'], $_POST['enemy_desc'], $enemy_photo, $_POST['enemy_video'], $_POST['enemy_quote']);
    header("Location: ../enemy-list.php");
    exit;
} else {
    echo "Chyba";
}
?>
