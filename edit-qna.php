<?php
$page_title = 'Zmena obsahu';
$noindex = 1;
?>

<?php include_once 'components/header.php' ?>

<?php require_once 'adm/classes/qna.php';
    $qna = new QnA();
    $id = $_GET['id'];
    $row = $qna->getQnAById($id);
    $question = $row['otazka'];
    $answer = $row['odpoved'];
?>

<div class="container">
    <form action="adm/classes/edit-qna.php?id=<?php echo $id;?>" class="form" method="post">
        <input type="hidden" value="<?php echo $row['id']; ?>">
        <label class="form-label">
            <span class="text-input-name">Otázka č. <?php echo $id;?></span>
            <input class="text-input" type="text" name="otazka" id="otazka" value="<?php echo htmlspecialchars($question);?>" required>
        </label>
        <label class="form-label">
            <span class="text-input-name">Odpoveď</span>
            <textarea class="text-input" cols="30" rows="10" name="odpoved" id="odpoved" required><?php echo htmlspecialchars($answer);?></textarea>
        </label>
        <input type="submit" class="btn" value="Uložiť">
        <a class="link" href="qna.php">Späť</a>
    </form>
</div>

<?php include_once 'components/footer.php' ?>