<?php
$meta_title = 'Hlavná';
$meta_description = 'Základná informacia o Doktorovi a rase Pánov času.';
$splide = 1;
$lightbox = 1;
?>

<?php include_once 'components/header.php' ?>
<section class="intro-sect">
  <div class="container">
    <h1 class="h1">Doctor Who</h1>
  </div>
</section>
<section class="about-sect">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="about-text">
          <h2 class="h2">Kto je Doktor?</h2>
          <p class="text">
            Doktor je rasy Pánov času (orig. Time Lords) a vybral si svoje meno samostatne. Rasa je humanoidná (my
            vyzeráme ako Páni času). Jeden z anatomických rozdielov je, že Páni času majú dve srdcia a dokážu
            regenerovať. Keď sa ich telo veľmi poškodí, regenerujú a získajú novú podobu - kvôli tomu seriál trvá
            už 60 rokov, lebo Doktora môžú hrať rôzné hercy.
          </p>

          <a href="about.php" class="btn">Dozvedieť viac</a>
        </div>
      </div>
      <div class="col-6">
        <div class="about-doctor-grid">
          <?php require_once 'adm/classes/doctor.php';
            $doctor = new Doctor();
            $doctor->getDoctorLatest();
          ?>
          <!-- <a href="img/doctor/9.jpg" class="lightbox">
            <img src="img/doctor/9.jpg" loading="lazy" alt="" title="9th Doctor, played by Christopher Eccleston" />
          </a>
          <a href="img/doctor/10.jpg" class="lightbox">
            <img src="img/doctor/10.jpg" loading="lazy" alt="" title="10th Doctor, played by David Tennant" />
          </a>
          <a href="img/doctor/11.jpg" class="lightbox">
            <img src="img/doctor/11.jpg" loading="lazy" alt="" title="11th Doctor, played by Matt Smith" />
          </a>
          <a href="img/doctor/12.jpg" class="lightbox">
            <img src="img/doctor/12.jpg" loading="lazy" alt="" title="12th Doctor, played by Peter Capaldi" />
          </a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="enemy-sect">
  <div class="container">
    <h2 class="h2">Kto sú ho nepriatelia?</h2>
    <div class="splide enemy-splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php require_once 'adm/classes/enemy.php';
            $enemy = new Enemy();
            $enemy->getEnemySlider();
          ?>
        </ul>
      </div>
    </div>
    <div class="enemy-btn-wrap">
      <a href="enemy.php" class="btn">Dozvedieť viac</a>
    </div>
  </div>
</section>

<?php include_once 'components/faq.php' ?>

<?php include_once 'components/footer.php' ?>