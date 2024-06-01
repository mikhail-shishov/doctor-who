<?php
$meta_title = 'Registracia';
$meta_description = '...';
?>

<?php include_once 'components/header.php' ?>

<div class="container">
    <div class="form-container register-form">
        <h2 class="form-title">Registrácia</h2>
        <form method="post" action="adm/classes/register.php" class="form">
            <div class="form-label">
                <label class="text-input-name" for="username">Používateľské meno:</label>
                <input type="text" id="username" name="username" class="text-input">
            </div>
            <div class="form-label">
                <label class="text-input-name" for="email">Email:</label>
                <input type="email" id="email" name="email" class="text-input">
            </div>
            <div class="form-label">
                <label class="text-input-name" for="password">Heslo:</label>
                <input type="password" id="password" name="password" class="text-input">
            </div>
            <button type="submit" class="btn">Registrovať</button>
        </form>
        <p class="form-link register-link">Už máte účet? <a href="login.php">Prihlásiť sa</a></p>
    </div>
</div>

<?php include_once 'components/footer.php' ?>