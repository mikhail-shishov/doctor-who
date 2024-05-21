<?php
$page_title = 'Vymazanie';
$noindex = 1;
?>

<?php include_once 'components/header.php' ?>

<?php require_once 'adm/classes/qna.php';
    $qna = new QnA();
?>

<div class="container">
    <form action="adm/classes/create-qna.php" class="form" method="post">
        <label class="form-label">
            <span class="text-input-name">Nová otázka</span>
            <input type="text" name="otazka" id="otazka" class="text-input" required>
        </label>
        <label class="form-label">
            <span class="text-input-name">Nová odpoveď</span>
            <textarea cols="30" rows="10" name="odpoved" id="odpoved" class="text-input" required></textarea>
        </label>
        <input type="submit" class="btn" value="Vytvoriť">
    </form>
    <br>
</div>

<?php include_once 'components/footer.php' ?>