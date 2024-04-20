<?php
require_once('classes/contact.php');

use contact;

$meno = $_POST['meno'];
$email = $_POST['email'];
$sprava = $_POST['sprava'];
// Overenie údajov
if (empty($meno) || empty($email) || empty($sprava)) {
    die('Chyba: Všetky polia sú povinné!');
}
// Uloženie správy do databázy
$kontakt = new contact();
$ulozene = $kontakt->ulozitSpravu($meno, $email, $sprava);
if ($ulozene) {
    header('Location: http://localhost/doctor-who/thank-you.php');
} else {
    http_response_code(404);
    die('Chyba pri odosielaní správy do databázy!');
}
