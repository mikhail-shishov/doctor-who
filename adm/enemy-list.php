<?php include_once 'components/header.php' ?>
<div class="container">
    <h1 class="mb-4">Nepriatelia</h1>
    <a href="/doctor-who/adm/enemy-add.php" class="btn btn-primary">Prídať nového</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Názov</th>
                <th scope="col">Opis</th>
                <th scope="col">Naposledy upravené</th>
                <th scope="col">Zmeny</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Dalek</td>
                <td>...</td>
                <td>04.05.2024, admin</td>
                <td><a href="">Upraviť</a><br><a href="">Zmazať</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cybermen</td>
                <td>...</td>
                <td>05.05.2024, admin</td>
                <td><a href="">Upraviť</a><br><a href="">Zmazať</a></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include_once 'components/footer.php' ?>