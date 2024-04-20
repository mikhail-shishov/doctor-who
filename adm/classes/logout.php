<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/users.php');

$email = $_POST["email"];
$password = $_POST["password"];

$users = new Users();
$users->logout();