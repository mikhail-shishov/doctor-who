<?php
$meta_title = 'Prihlasiť sa';
$meta_description = '...';
?>

<?php include_once 'components/header.php' ?>

<div class="container">
    <div class="login-form">
        <h2 class="form-title">Prihlásenie</h2>
        <form method="post" action="adm/classes/login.php" class="form">
            <div class="form-label">
                <label class="text-input-name" for="username">E-mail:</label>
                <input type="text" id="email" name="email" class="text-input">
            </div>
            <div class="form-label">
                <label class="text-input-name" for="password">Heslo:</label>
                <input type="password" id="password" name="password" class="text-input">
            </div>
            <button type="submit" class="btn">Prihlásiť</button>
        </form>
        <p class="form-link login-link">Nemáte účet? <a href="register.php">Registrovať</a></p>
    </div>

    <?php include_once 'components/footer.php' ?>
</div>