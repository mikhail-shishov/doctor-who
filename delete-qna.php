<?php
$page_title = 'Vymazanie';
$noindex = 1;
?>

<?php include_once 'components/header.php' ?>

<?php require_once 'adm/classes/qna.php';
    $qna = new QnA();
    $id = $_GET['id'];
    $qna->deleteQnA($id);
?>

<div class="container">
    <p>Otazka č. <?php echo $id;?> bola vymazaná.</p>
    <a class="link" href="qna.php">Späť</a>
</div>

<?php include_once 'components/footer.php' ?>