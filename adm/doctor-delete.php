<?php
$page_title = 'Vymazanie';
$noindex = 1;
?>

<?php include_once 'components/header.php' ?>

<?php require_once 'classes/doctor.php';
    $doctor = new doctor();
    $id = $_GET['id'];
    $doctor->deleteDoctor($id);
?>

<div class="container">
    <p>Položka č. <?php echo $id;?> bola vymazaná.</p>
    <a class="link" href="doctor-list.php">Späť</a>
</div>

<?php include_once 'components/footer.php' ?>