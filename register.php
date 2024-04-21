<?php
$meta_title = 'Registracia';
$meta_description = '...';
?>

<?php include_once 'components/header.php' ?>

<div class="container">
    <div class="form-container register-form">
        <h2 class="form-title">Registrácia</h2>
        <form method="post" action="adm/classes/register.php">
            <div class="form-group">
                <label for="username">Používateľské meno:</label>
                <input type="text" id="username" name="username" class="form-input">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-input">
            </div>
            <div class="form-group">
                <label for="password">Heslo:</label>
                <input type="password" id="password" name="password" class="form-input">
            </div>
            <button type="submit" class="form-button">Registrovať</button>
        </form>
        <p class="form-link register-link">Už máte účet? <a href="sign-in.php">Prihlásiť sa</a></p>
    </div>
</div>

<?php include_once 'components/footer.php' ?>