<!DOCTYPE html>
<html lang="sk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Chcete dozvedieť viac? Kľudne zavolajte Doktorovi alebo ponechajte svoju otázku." />
    <meta name="keywords" content="doktor, mail" />
    <meta name="author" content="Mikhail Shishov" />

    <title>Kontakt | Doctor Who</title>

    <!-- favicon start -->
    <link href="favicon.ico" rel="icon" />
    <link href="img/favicon.png" rel="icon" sizes="any" />
    <!-- favicon end -->

    <link rel="stylesheet" href="css/simple-lightbox.min.css" />
    <link rel="stylesheet" href="css/splide.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-wrap">
          <a href="index.html" class="logo">
            <img src="img/logo.svg" width="80" height="80" alt="Doctor Who official logo" />
          </a>
          <button class="burger"></button>
          <nav class="header-nav">
            <a href="index.html">Hlavná</a>
            <a href="about.html">O Doktore</a>
            <a href="enemy.html">Nepriateľia</a>
            <a href="contact.html" class="is-active">Kontakt</a>
          </nav>
        </div>
      </div>
    </header>

    <main class="main">
      <div class="contact-sect">
        <div class="container">
          <h1 class="h1">Chcete dozvedieť viac?</h1>
          <p class="text">
            Kľudne zavolajte Doktorovi a on s Vámi porozprava &mdash; <a href="tel:+1867-5309">+1 867-5309</a>.
          </p>

          <hr class="line">

          <h2 class="h2">Pozor: Doktor môže byť v inej galaxie a pravdepodobne súčasne nemá dobrý signal.</h2>
          <h3 class="h3">Môžete ponechať svoju otázku a mail dole.</h3>

          <form action="thank-you.html" method="post" id="contact-form" class="form">
            <label class="form-label">
              <span class="text-input-name">Meno</span>
              <input type="text" class="text-input" placeholder="napr. John" id="name">
              <span class="error-message">Error</span>
            </label>
            <label class="form-label">
              <span class="text-input-name">E-mail</span>
              <input type="email" class="text-input" placeholder="napr. johndoe@example.com" id="email">
              <span class="error-message">Error</span>
            </label>
            <label class="form-label">
              <span class="text-input-name">Otázka</span>
              <textarea class="text-input"></textarea>
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
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <p>Vytvoril Mikhail Shishov &copy; 2023</p>
            <p><a href="mailto:mikhail.shishov@student.ukf.sk">mikhail.shishov@student.ukf.sk</a></p>
          </div>
          <div class="col-3">
            <p><a href="index.html">Hlavná</a></p>
            <p><a href="contact.html">Kontakt</a></p>
          </div>
          <div class="col-3">
            <p><a href="about.html">O Doktore</a></p>
            <p><a href="enemy.html">Nepriateľia</a></p>
          </div>
        </div>
        <p class="copyright">
          Toto je fan stránka. Práva na seriál patria <a href="https://www.bbc.com/" target="_blank" rel="nofollow noopener">BBC</a>.
        </p>
      </div>
    </footer>

    <script src="js/simple-lightbox.min.js"></script>
    <script src="js/splide.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

