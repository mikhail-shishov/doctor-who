<?php
$page_title = 'Zoznam otázok a odpovede';
?>

<?php include_once 'components/header.php' ?>
<div class="container">
    <h1 class="mb-4">FAQ</h1>
    <a href="/doctor-who/create-qna.php" class="btn btn-primary">Prídať novú otázku</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Otázka</th>
                <th scope="col">Opis</th>
            </tr>
        </thead>
        <tbody>
            <?php require_once 'classes/qna.php';
            $qna = new QnA();
            $qna->getQnAAdm();
            ?>
        </tbody>
    </table>
</div>
<?php include_once 'components/footer.php' ?>