<?php
$page_title = 'Upravovanie nepriateľa';
?>

<?php include_once 'components/header.php' ?>
<?php require_once 'classes/enemy.php';
    $enemy = new enemy();
    $id = $_GET['id'];
    $row = $enemy->getEnemyById($id);
    $title = $row['title'];
    $summary = $row['summary'];
    $photo = $row['photo'];
    $video = $row['video'];
    $quote = $row['quote'];
?>

<div class="container">
    <form action="classes/edit-enemy.php?id=<?php echo $id;?>" class="form" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $row['id']; ?>">
        <label class="form-control mb-3">
            <span class="form-label">Názov nepriateľa *</span>
            <input class="form-control mt-1 mb-2" type="text" name="title" id="title" value="<?php echo htmlspecialchars($title);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Opis *</span>
            <input class="form-control mt-1 mb-2" type="text" name="summary" id="summary" value="<?php echo htmlspecialchars($summary);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Obrazok * <b>Úpravte len pri pridavaní novej fotky!</b></span>
            <input class="form-control" type="file" name="photo" id="photo">
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Video, nepovinné, v tvari iframe z Youtube</span>
            <textarea class="form-control mt-1 mb-2" name="video" id="video"><?php echo htmlspecialchars($video);?></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Cítat, nepovinné</span>
            <textarea class="form-control mt-1 mb-2" name="quote" id="quote"><?php echo htmlspecialchars($quote);?></textarea>
        </label>
        <div class="d-flex gap-2">
            <a href="/doctor-who/adm/enemy-list.php" class="btn me-auto" type="submit">Späť</a>
            <button type="submit" class="btn btn-primary">Úložiť</button>
        </div>
    </form>
</div>
<?php include_once 'components/footer.php' ?>