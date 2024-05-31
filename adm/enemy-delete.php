<?php
$page_title = 'Vymazanie nepriateľa';
?>

<?php include_once 'components/header.php' ?>

<?php require_once 'classes/enemy.php';
    $enemy = new enemy();
    $id = $_GET['id'];
    $enemy->deleteEnemy($id);
?>

<div class="container">
    <p>Položka č. <?php echo $id;?> bola vymazaná.</p>
    <a class="link" href="enemy-list.php">Späť</a>
</div>

<?php include_once 'components/footer.php' ?>