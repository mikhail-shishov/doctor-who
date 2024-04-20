<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/users.php');

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if (empty($username) ||empty($email) || empty($password)) {
    die("Chyba - všetky polia sú povinné.");
}

try {
    $user = new Users();
    $user->register($username, $email, $password);
    header('Location: http://localhost/doctor-who/index.php');
} catch (Exception $e) {
    http_response_code(404);
    die ("Chyba odosielania do databázy.");
}
