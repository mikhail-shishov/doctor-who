<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/qna.php');

session_start();

if (!isset($_SESSION['role']) || !$_SESSION['user_id']) {
    header("Location: /login.php");
    exit;
}

$id = $_GET["id"];
$qna = new QnA();
$admin = new Users();

if (!$admin->isAdmin()) {
    echo "Nemáte opravnenie";
    exit;
}

$row = $qna->getQnAById(intval($id));

if (!$row) {
    echo "Otázka s daným ID nebola najdena.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qna->updateQnA($id, $_POST['question'], $_POST['answer']);
    header("Location: /qna.php");
    exit;
}