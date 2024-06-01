<?php
$page_title = 'Vymazanie';
?>

<?php include_once 'components/header.php' ?>

<?php require_once 'classes/users.php';
    $users = new Users();
    $id = $_GET['id'];
    $users->deleteUser($id);
?>

<div class="container">
    <p>Položka č. <?php echo $id;?> bola vymazaná.</p>
    <a class="link" href="user-list.php">Späť</a>
</div>

<?php include_once 'components/footer.php' ?>