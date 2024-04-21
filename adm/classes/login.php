<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/users.php');

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($email) || empty($password)) {
    die("Chyba - všetky polia sú povinné.");
}

try {
    $user = new Users();
    $user->login($email, $password);
    header('Location: http://localhost/doctor-who/index.php');
} catch (Exception $e) {
    http_response_code(404);
    echo "<div class='container'>";
    echo "<div class='error-message'>Chyba: " . $e->getMessage();
    echo "<br><a href='/doctor-who/login.php'>Späť</a></div>";
    echo "</div>";
}
