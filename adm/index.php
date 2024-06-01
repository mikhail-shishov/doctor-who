<?php include_once 'components/header.php' ?>
<div class="container">
    <h1 class="mb-4">Ahoj, <span style="color: blue"><?php session_start();echo $_SESSION['username'];?></span>!</h1>
    <h2 class="mb-3">Obsah stranky</h2>
    <ul class="list-group mb-5">
        <li class="list-group-item"><a href="doctor-list.php">Doktory</a></li>
        <li class="list-group-item"><a href="enemy-list.php">Nepriatelia</a></li>
        <li class="list-group-item"><a href="qna-list.php">FAQ</a></li>
    </ul>
    <h2 class="mb-3">Administrativné prostredie</h2>
    <ul class="list-group mb-5">
        <li class="list-group-item"><a href="user-list.php">Použivatelia systemu</a></li>
    </ul>
    <h2 class="mb-3">Otázky z kontaktného formularu (najnovšie sú hore)</h2>
    <table class="table mt-4">
        <tr>
            <th>#</th>
            <th>Meno odosielateľa</th>
            <th>E-mail</th>
            <th>Sprava</th>
            <th>Čas odoslania</th>
        </tr>
        <?php require_once 'classes/contact.php';
        $contact = new Contact();
        $contact->getDataAdm();
        ?>
    </table>
</div>
<?php include_once 'components/footer.php' ?>