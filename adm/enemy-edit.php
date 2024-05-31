<?php
$page_title = 'Upravovanie nepriateľa';
?>

<?php include_once 'components/header.php' ?>
<?php require_once 'classes/enemy.php';
    $enemy = new enemy();
    $id = $_GET['id'];
    $row = $enemy->getEnemyById($id);
    $enemy_name = $row['enemy_name'];
    $enemy_desc = $row['enemy_desc'];
    $enemy_photo = $row['enemy_photo'];
    $enemy_video = $row['enemy_video'];
    $enemy_quote = $row['enemy_quote'];
?>

<div class="container">
    <form action="classes/edit-enemy.php?id=<?php echo $id;?>" class="form" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $row['id']; ?>">
        <label class="form-control mb-3">
            <span class="form-label">Názov nepriateľa *</span>
            <input class="form-control mt-1 mb-2" type="text" name="enemy_name" id="enemy_name" value="<?php echo htmlspecialchars($enemy_name);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Opis *</span>
            <input class="form-control mt-1 mb-2" type="text" name="enemy_desc" id="enemy_desc" value="<?php echo htmlspecialchars($enemy_desc);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Obrazok * <b>Úpravte len pri pridavaní novej fotky!</b></span>
            <input class="form-control" type="file" name="enemy_photo" id="enemy_photo">
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Video, nepovinné, v tvari iframe z Youtube</span>
            <textarea class="form-control mt-1 mb-2" name="enemy_video" id="enemy_video"><?php echo htmlspecialchars($enemy_video);?></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Cítat, nepovinné</span>
            <textarea class="form-control mt-1 mb-2" name="enemy_quote" id="enemy_quote"><?php echo htmlspecialchars($enemy_quote);?></textarea>
        </label>
        <div class="d-flex gap-2">
            <a href="/doctor-who/adm/enemy-list.php" class="btn me-auto" type="submit">Späť</a>
            <button type="submit" class="btn btn-primary">Úložiť</button>
        </div>
    </form>
</div>
<?php include_once 'components/footer.php' ?>