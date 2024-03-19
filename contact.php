<?php
$meta_title = 'Kontakt';
$meta_description = 'Chcete dozvedieť viac? Kľudne zavolajte Doktorovi alebo ponechajte svoju otázku.';
$og_image = 'img/pexels-philippe-donn-1169754.jpg';
?>

<?php include_once 'components/header.php' ?>
<div class="contact-sect">
  <div class="container">
    <h1 class="h1">Chcete dozvedieť viac?</h1>
    <p class="text">
      Kľudne zavolajte Doktorovi a on s Vámi porozprava &mdash; <a class="link" href="tel:+1867-5309">+1 867-5309</a>.
    </p>

    <hr class="line">

    <h2 class="h2">Pozor: Doktor môže byť v inej galaxie a pravdepodobne súčasne nemá dobrý signal.</h2>
    <h3 class="h3">Môžete ponechať svoju otázku a mail dole.</h3>

    <form action="admin/spracovanieForm.php" method="post" id="contact-form" class="form">
      <label class="form-label">
        <span class="text-input-name">Meno</span>
        <input type="text" class="text-input" placeholder="napr. John" id="meno" name="meno">
        <span class="error-message">Error</span>
      </label>
      <label class="form-label">
        <span class="text-input-name">E-mail</span>
        <input type="email" class="text-input" placeholder="napr. johndoe@example.com" id="email" name="email">
        <span class="error-message">Error</span>
      </label>
      <label class="form-label">
        <span class="text-input-name">Otázka</span>
        <textarea class="text-input" id="sprava" name="sprava"></textarea>
      </label>
      <label class="form-label">
        <input type="checkbox" class="checkbox" id="checkbox">
        <span class="text-input-checkbox">Súhlasím so spracovaním osobných údajov.</span>
        <span class="error-message">Error</span>
      </label>
      <button type="submit" class="btn btn-send">Odoslať</button>
    </form>
  </div>
</div>

<?php include_once 'components/footer.php' ?>