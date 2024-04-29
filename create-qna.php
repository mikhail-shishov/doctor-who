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
            <span>Nová otázka</span>
            <input type="text" name="otazka" id="otazka" required>
        </label>
        <label class="form-label">
            <span>Nová odpoveď</span>
            <textarea cols="30" rows="10" name="odpoved" id="odpoved" required></textarea>
        </label>
        <input type="submit" class="btn" value="Vytvoriť">
    </form>
</div>

<?php include_once 'components/footer.php' ?>