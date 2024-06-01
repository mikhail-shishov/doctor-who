<?php
$meta_title = 'O Doktorovi';
$meta_description = 'Chcete dozvedieť viac? Kľudne zavolajte Doktorovi alebo ponechajte svoju otázku.';
$og_image = 'img/doctor/9.jpg';
$splide = 1;
?>

<?php include_once 'components/header.php' ?>

<section class="about-page-sect">
  <div class="container">
    <h1 class="h1">O Doktorovi</h1>
    <p>
      Doktor si meno vybral pri zasvätení <i>(ostatní Páni času ho priviedli k trhline v časopriestore, keď bol mladý)</i>. Je rasy Pánov času <i>(orig. Time Lords)</i>. Rasa je humanoidná <i>(my vyzeráme ako Páni času)</i>, ale jeden z anatomických rozdielov je, že Páni času majú dve srdcia. Páni času dokážu regenerovať. Keď sa ich telo veľmi poškodí, regenerujú a získajú novú podobu. Doktor má vo zvyku po každej regenerácii <i>(s výnimkou keď 10. Doktor usmernil prebytočnú energiu do nádoby s odseknutou rukou, teda keď zmenia výzor)</i> vymeniť odev. Ak sa niečo stane iba s nejakou časťou ich tela tesne po regenerácii, tá časť tela dorastie kvôli nespotrebovanej, prebytočnej regeneračnej energii <i>(odsekli mu skôr spomínanú ruku, ale znova mu narástla)</i>.
    </p>

    <p>
      Doktor cestuje vo svojom stroji času <b>T.A.R.D.I.S</b> <i>(v origináli Time And Relative Dimension In Space, teda čas a relatívna dimenzia v priestore)</i>, ktorá zvonku <b>vyzerá ako britská policajná telefónna búdka zo 60. rokov</b>. So svojimi spoločníkmi cestuje naprieč celým časopriestorom. Ale originálna T.A.R.D.I.S sa prispôsobuje prostrediu, v ktorom sa nachádza. Lenže Doktorova T.A.R.D.I.S má poškodený chameleoní obvod, a preto ostala ako telefónna búdka.
    </p>

    <p>
      Chameleoní obvod je obvod, ktorý umožňuje T.A.R.D.I.S sa prispôsobiť obdobiu a miestu, kde sa nachádza &mdash; napríklad v Egypte by z nej bola pyramída.
    </p>
    <div class="table-wrap">
      <table class="table">
        <tbody>
          <tr>
            <th>Poradie Doktorov</th>
            <th>Herec</th>
            <th>Obdobie</th>
            <th>Kratký opis</th>
          </tr>
          <?php require_once 'adm/classes/doctor.php';
          $doctor = new Doctor();
          $doctor->getDoctorTable();
          ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="doctor-page-sect">
  <div class="container">
    <h2 class="h2">Moje najobľubenejšie Doktory</h2>
    <div class="splide doctor-splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php
          $doctor->getDoctor();
          ?>
          <!-- <li class="splide__slide">
            <p class="doctor-name">Herec Christopher Eccleston ako Doktor</p>
            <div class="enemy-pic">
              <img src="img/doctor/9.jpg" alt="Eccleston" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="doctor-name">Herec David Tennant ako Doktor</p>
            <p class="doctor-text">
              Je to najúspešnejší herec, ktorý hrál Doktora Kto, lebo on robil toto celkovo 6 rokov a bol v niekoľkych sezónach seriálu.
            </p>
            <div class="enemy-pic">
              <img src="img/doctor/10.jpg" alt="Tennant" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="doctor-name">Herec Matt Smith ako Doktor</p>
            <div class="enemy-pic">
              <img src="img/doctor/11.jpg" alt="Smith" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="doctor-name">Herec Peter Capaldi ako Doktor</p>
            <div class="enemy-pic">
              <img src="img/doctor/12.jpg" alt="Capaldi" />
            </div>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
</section>

<?php include_once 'components/footer.php' ?>