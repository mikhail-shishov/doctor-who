<?php
$meta_title = 'O Doktorovi';
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
          <a href="img/doctor/9.jpg" class="lightbox">
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
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="enemy-sect">
  <div class="container">
    <h2 class="h2">Kto sú ho nepriateľia?</h2>
    <div class="splide enemy-splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <p class="enemy-name">Daleks</p>
            <div class="enemy-pic">
              <img src="img/enemy/dalek.jpeg" alt="Dalek" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="enemy-name">Cybermen</p>
            <div class="enemy-pic">
              <img src="img/enemy/cybermen.jpeg" alt="Cybermen" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="enemy-name">Sontaran</p>
            <div class="enemy-pic">
              <img src="img/enemy/sontaran.jpg" alt="Sontaran" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="enemy-name">The Silence</p>
            <div class="enemy-pic">
              <img src="img/enemy/silence.jpg" alt="The Silence" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="enemy-name">Cassandra</p>
            <div class="enemy-pic">
              <img src="img/enemy/cassandra.jpg" alt="Cassandra" />
            </div>
          </li>
          <li class="splide__slide">
            <p class="enemy-name">Angels</p>
            <div class="enemy-pic">
              <img src="img/enemy/angel.jpeg" alt="Angels" />
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="enemy-btn-wrap">
      <a href="enemy.php" class="btn">Dozvedieť viac</a>
    </div>
  </div>
</section>
<section class="fact-sect">
  <div class="container">
    <h2 class="h2">Zaujimavosti</h2>
    <div class="accordion-container">
      <div class="accordion-block">
        <button class="accordion-heading">
          <span class="accordion-heading-name">Kedy sa začalo vysielanie seriálu?</span>
        </button>
        <div class="accordion-text">
          <p class="text">
            23. novembra v roku 1963 odvysielala britská BBC prvý diel prvej série seriálu Doctor Who (niekedy v
            preklade Pán času). Je najdlhšie vysielaným a najúspešnejším seriálom v histórii. Zatiaľ sa
            odvysielalo takmer 40 sérií a vyše 850 dielov. Hlavnú úlohu si zahralo už 13 hercov a 1 herečka.
          </p>
        </div>
      </div>

      <div class="accordion-block">
        <button class="accordion-heading">
          <span class="accordion-heading-name">"Starý" a "nový" Doctor Who</span>
        </button>
        <div class="accordion-text">
          <p class="text">
            Vysielanie sa začalo roku 1963 a pokračovalo až do roku 1989. Počas tohto obdobia vznikli dva filmy
            (roky 1965, 1966). Následne bol v roku 1996 natočený film, ktorý mal slúžiť ako pilotná snímka k novej
            sérii (k jej natočeniu nikdy nedošlo). Ku skutočnému znovuzrodeniu Doktora došlo až v roku 2005, opäť
            pod taktovkou BBC a kanadskej spoločnosti CBC ako ko-producenta.
          </p>
        </div>
      </div>

      <div class="accordion-block">
        <button class="accordion-heading">
          <span class="accordion-heading-name">Rôzné zaujimavé fakty</span>
        </button>
        <div class="accordion-text">
          <ul class="list">
            <li>
              <p class="text">
                Doktor je naozaj doktorom, hoci nie je jasné, akým. Svoje meno si zvolil aj kvôli tomu, že „lieči“
                svet, ochraňuje Zem a vesmír pred zlom a neprávosťami.
              </p>
            </li>
            <li>
              <p class="text">
                Postava Doktora bola čiastočne inšpirovaná Sherlockom Holmesom. Štvrtý a 11. Doktor sa dokonca za
                literárnu postavu aj prezliekli.
              </p>
            </li>
            <li>
              <p class="text">
                Počas svojho cestovania stretol Doktor mnoho slávnych osobností, napríklad Leonarda da Vinciho,
                Williama Shakespeara, Alberta Einsteina, Charlesa Dickensa, Winstona Churchilla či kráľovné
                Viktóriu a Alžbetu I.
              </p>
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/ubTJI_UphPk?si=9WUm5XbZTJ7M5cwn" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </li>
            <li>
              <p class="text">Zvuk, ktorý vydáva TARDIS, bol vytvorený šúchaním kľúča o klavírne struny.</p>
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/Xg8M-8BqTGs?si=IhYM_J2MJxm1HXBV" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include_once 'components/footer.php' ?>