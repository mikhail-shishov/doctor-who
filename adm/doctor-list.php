<?php include_once 'components/header.php' ?>
<div class="container">
    <h1 class="mb-4">Doktory</h1>
    <a href="adm/doctor-add.php" class="btn btn-primary">Prídať nového</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fotka</th>
                <th scope="col">Poradie Doktora</th>
                <th scope="col">Meno herca</th>
                <th scope="col">Roky</th>
                <th scope="col">Opis</th>
                <th scope="col">Zmeny</th>
            </tr>
        </thead>
        <tbody>
            <?php require_once 'classes/doctor.php';
            $qna = new Doctor();
            $qna->getDoctor_adm();
            ?>
        </tbody>
    </table>
</div>
<?php include_once 'components/footer.php' ?>