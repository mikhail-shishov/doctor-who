<section class="fact-sect">
  <div class="container">
    <h2 class="h2">Zaujimavosti</h2>
    <div class="accordion-container">
      <?php require_once 'adm/classes/qna.php';
      $qna = new QnA();
      $qna->getQnA();
      ?>
    </div>

    <?php if ($_SESSION['role'] == 'admin') {
      echo "<br>";
      echo "<a href='create-qna.php' class='btn'>Nová otázka</a>";
    } ?>
  </div>
</section>