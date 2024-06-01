<?php
$page_title = 'Pridavanie nepriateľa';
?>

<?php include_once 'components/header.php' ?>
<?php require_once 'classes/enemy.php';
$enemy = new Enemy();
?>

<div class="container">
    <form action="classes/create-enemy.php" class="form" method="post" enctype="multipart/form-data">
        <label class="form-control mb-3">
            <span class="form-label">Názov nepriateľa *</span>
            <input class="form-control mt-1 mb-2" type="text" name="title" id="title" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Opis *</span>
            <textarea class="form-control mt-1 mb-2" name="summary" id="summary" required></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Obrazok *</span>
            <input class="form-control" type="file" name="photo" id="photo" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Video, nepovinné, v tvari iframe z Youtube</span>
            <textarea class="form-control mt-1 mb-2" name="video" id="video"></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Cítat, nepovinné</span>
            <textarea class="form-control mt-1 mb-2" name="quote" id="quote"></textarea>
        </label>
        <div class="d-flex gap-2">
            <a href="enemy-list.php" class="btn me-auto" type="submit">Späť</a>
            <button type="submit" class="btn btn-primary">Vytvoriť</button>
        </div>
    </form>
</div>
<?php include_once 'components/footer.php' ?>