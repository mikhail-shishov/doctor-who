<?php
$page_title = 'Zoznam použivateľov';
?>

<?php include_once 'components/header.php' ?>
<div class="container">
    <h1 class="mb-4">Zoznam použivateľov</h1>
    
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">E-mail</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php require_once 'classes/users.php';
            $users = new Users();
            $users->getUsersAdm();
            ?>
        </tbody>
    </table>
</div>
<?php include_once 'components/footer.php' ?>