<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/doctor.php');

session_start();

$id = $_GET["id"];
$doctor = new doctor();

$row = $doctor->getDoctorById(intval($id));

if (!$row) {
    echo "Doktor s daným ID nebol najdený.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['actor_photo']) && $_FILES['actor_photo']['error'] === UPLOAD_ERR_OK) {
        $actor_photo = file_get_contents($_FILES['actor_photo']['tmp_name']);
    } else {
        $actor_photo = $row['actor_photo'];
    }
    $featured = isset($_POST['featured']) ? 1 : 0;
    $doctor->updateDoctor($id, $_POST['doctor_name'], $_POST['actor_name'], $actor_photo, $_POST['years_active'], $_POST['summary'], $_POST['placement'], $featured);
    header("Location: ../doctor-list.php");
    exit;
} else {
    echo "Chyba";
}
