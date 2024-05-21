<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/doctor.php');

session_start();

$id = $_GET["id"];
$doctor = new doctor();

$row = $doctor->getDoctorById(intval($id));

if (!$row) {
    echo "Doktor s daným ID nebol najdený.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doctor->updateDoctor($id, $_POST['doctor_name'], $_POST['actor_name'], $_POST['years_active'], $_POST['doctor_desc'], $_POST['featured']);
    header("Location: ../../doctor-list.php");
    exit;
} else {
    echo "Chyba";
}