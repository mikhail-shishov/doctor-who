<?php
$page_title = 'Pridavanie nepriateľa';
?>

<?php include_once 'components/header.php' ?>
<?php require_once 'classes/enemy.php';
$enemy = new enemy();
?>

<div class="container">
    <form action="classes/create-enemy.php" class="form" method="post" enctype="multipart/form-data">
        <label class="form-control mb-3">
            <span class="form-label">Názov nepriateľa *</span>
            <input class="form-control mt-1 mb-2" type="text" name="enemy_name" id="enemy_name" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Opis *</span>
            <textarea class="form-control mt-1 mb-2" name="enemy_desc" id="enemy_desc" required></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Obrazok *</span>
            <input class="form-control" type="file" name="enemy_photo" id="enemy_photo" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Video, nepovinné, v tvari iframe z Youtube</span>
            <textarea class="form-control mt-1 mb-2" name="enemy_video" id="enemy_video"></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Cítat, nepovinné</span>
            <textarea class="form-control mt-1 mb-2" name="enemy_quote" id="enemy_quote"></textarea>
        </label>
        <div class="d-flex gap-2">
            <a href="enemy-list.php" class="btn me-auto" type="submit">Späť</a>
            <button type="submit" class="btn btn-primary">Vytvoriť</button>
        </div>
    </form>
</div>
<?php include_once 'components/footer.php' ?>