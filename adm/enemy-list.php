<?php
$page_title = 'Nepriatelia';
?>

<?php include_once 'components/header.php' ?>
<div class="container">
    <h1 class="mb-4">Nepriatelia</h1>
    <a href="enemy-add.php" class="btn btn-primary">Prídať nového</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Názov</th>
                <th scope="col">Opis</th>
                <th scope="col">Video</th>
                <th scope="col">Citát</th>
            </tr>
        </thead>
        <tbody>
            <?php require_once 'classes/enemy.php';
            $enemy = new enemy();
            $enemy->getEnemy_adm();
            ?>
        </tbody>
    </table>
</div>
<?php include_once 'components/footer.php' ?>