<?php
$page_title = 'Upravovanie Doktora';
?>

<?php include_once 'components/header.php' ?>
<?php require_once 'classes/doctor.php';
    $doctor = new Doctor();
    $id = $_GET['id'];
    $row = $doctor->getDoctorById($id);
    $doctor_name = $row['doctor_name'];
    $actor_name = $row['actor_name'];
    $actor_photo = $row['actor_photo'];
    $years_active = $row['years_active'];
    $summary = $row['summary'];
    $placement = $row['placement'];
    $featured = $row['featured'];
?>

<div class="container">
    <form action="classes/edit-doctor.php?id=<?php echo $id;?>" class="form" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $row['id']; ?>">
        <label class="form-control mb-3">
            <span class="form-label">Meno (poradie) doktora</span>
            <input class="form-control mt-1 mb-2" type="text" name="doctor_name" id="doctor_name" value="<?php echo htmlspecialchars($doctor_name);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Meno herca</span>
            <input class="form-control mt-1 mb-2" type="text" name="actor_name" id="actor_name" value="<?php echo htmlspecialchars($actor_name);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Foto herca. <b>Úpravte len pri pridavaní novej fotky!</b></span>
            <input class="form-control" type="file" name="actor_photo" id="actor_photo">
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Obdobie, kedy bol hlavnou postavou, v tvaru yyyy-yyyy</span>
            <input class="form-control mt-1 mb-2" type="text" name="years_active" id="years_active" value="<?php echo htmlspecialchars($years_active);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Opis doktora</span>
            <textarea class="form-control mt-1 mb-2" name="summary" id="summary" required><?php echo htmlspecialchars($summary);?></textarea>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Poradie v tvaru čísla, pre zoznamy a tabuľky *</span>
            <input class="form-control mt-1 mb-2" type="number" name="placement" id="placement" value="<?php echo htmlspecialchars($placement);?>" required>
        </label>
        <label class="form-control mb-3">
            <span class="form-label">Zobrazovať medzi najlepších/naobľubenejších</span>
            <?php if ($row['featured']=="1") {$checked = 'checked="checked"';}
            echo '<input type="checkbox" name="featured" id="featured" ' .$checked. '>'?>
        </label>
        <div class="d-flex gap-2">
            <a href="/doctor-who/adm/doctor-list.php" class="btn me-auto" type="submit">Späť</a>
            <button type="submit" class="btn btn-primary">Úložiť</button>
        </div>
    </form>
</div>
<?php include_once 'components/footer.php' ?>