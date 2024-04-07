<?php include_once 'components/header.php' ?>
<div class="container">
    <h1 class="mb-4">Doktory</h1>
    <a href="/doctor-who/adm/doctor-add.php" class="btn btn-primary">Prídať nového</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col"># v poradí, slovo</th>
                <th scope="col">Fotka</th>
                <th scope="col">Meno herca</th>
                <th scope="col">Naposledy upravené</th>
                <th scope="col">Zmeny</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Prvý</th>
                <td>...</td>
                <td>John Smith</td>
                <td>04.05.2024, admin</td>
                <td><a href="">Upraviť</a><br><a href="">Zmazať</a></td>
            </tr>
            <tr>
                <th scope="row">Druhý</th>
                <td>...</td>
                <td>Jane Doe</td>
                <td>04.05.2024, admin</td>
                <td><a href="">Upraviť</a><br><a href="">Zmazať</a></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include_once 'components/footer.php' ?>