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
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = file_get_contents($_FILES['photo']['tmp_name']);
    } else {
        $photo = $row['photo'];
    }
    $featured = isset($_POST['featured']) ? 1 : 0;
    $enemy->updateEnemy($id, $_POST['title'], $_POST['summary'], $photo, $_POST['video'], $_POST['quote']);
    header("Location: ../enemy-list.php");
    exit;
} else {
    echo "Chyba";
}
