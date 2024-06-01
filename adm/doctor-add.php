<?php
$page_title = 'Pridavanie Doktora';
?>

<?php include_once 'components/header.php' ?>
<?php require_once 'classes/doctor.php';
$doctor = new doctor();
?>

<div class="container">
    <form action="classes/create-doctor.php" class="form" method="post" enctype="multipart/form-data">
        <label class="form-control mb-3">
            <span class="form-label">Meno (poradie) doktora *</span>
            <input class="form-control mt-1 mb-2" type="text" name="doctor_name" id="doctor_name" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Meno herca *</span>
            <input class="form-control mt-1 mb-2" type="text" name="actor_name" id="actor_name" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Foto herca *</span>
            <input class="form-control" type="file" name="actor_photo" id="actor_photo" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Obdobie, kedy bol hlavnou postavou, v tvare yyyy-yyyy *</span>
            <input class="form-control mt-1 mb-2" type="text" name="years_active" id="years_active" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Opis doktora *</span>
            <textarea class="form-control mt-1 mb-2" name="summary" id="summary" required></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Poradie v tvaru čísla, pre zoznamy a tabuľky *</span>
            <input class="form-control mt-1 mb-2" type="number" name="placement" id="placement" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Zobrazovať medzi najlepších/naobľubenejších</span>
            <input type="checkbox" name="featured" id="featured">
        </label>
        <div class="d-flex gap-2">
            <a href="doctor-list.php" class="btn me-auto" type="submit">Späť</a>
            <button type="submit" class="btn btn-primary">Vytvoriť</button>
        </div>
    </form>
</div>
<?php include_once 'components/footer.php' ?>