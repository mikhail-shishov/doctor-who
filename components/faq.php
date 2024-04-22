<section class="fact-sect">
  <div class="container">
    <h2 class="h2">Zaujimavosti</h2>
    <?php 
    include_once 'adm/classes/qna.php';
    $qna = new QnA();
    $qna->otazky($otazka, $odpoved);
    ?>
    </div>
</div>

<!-- Simple HTML -->
<!-- <section class="fact-sect">
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
</section> -->