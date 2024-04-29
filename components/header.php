<?php
$page = basename($_SERVER['PHP_SELF']);

// $theme = $_GET["theme"];
?>

<!DOCTYPE html>
<html data-theme="light" id="html-dom" lang="sk">

<script>
  var theme = 'light';
  var theme_local = localStorage.getItem('theme');
  if (theme !== null) {
    theme = theme_local;
  }
  document.getElementById('html-dom').setAttribute('data-theme', theme);
</script>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    <?php if (isset($meta_title)) { ?>
      <?php echo ($meta_title . " | Doctor Who") ?>
    <?php } else { ?>
      Doctor Who
    <?php } ?>
  </title>

  <?php if (isset($meta_description)) { ?>
    <meta name="description" content="<?php echo ($meta_description) ?>" />
    <meta property="og:description" content="<?php echo ($meta_description) ?>" />
  <?php } else { ?>
    <meta name="description" content="Viac o Doctor Who môžete dozvedieť na našej stranke." />
    <meta property="og:description" content="Viac o Doctor Who môžete dozvedieť na našej stranke." />
  <?php } ?>

  <?php if (isset($noindex)) { ?>
    <meta name="robots" content="noindex">
  <?php } ?>

  <?php if (isset($og_image)) { ?>
    <meta property="og:image" content="<?php echo ($og_image) ?>" />
  <?php } else { ?>
    <meta property="og:image" content="img/tardis.jpeg" />
  <?php } ?>

  <meta name="keywords" content="doktor, páni, času" />
  <meta name="author" content="Mikhail Shishov" />

  <!-- favicon start -->
  <link href="favicon.ico" rel="icon" />
  <link href="img/favicon.png" rel="icon" sizes="any" />
  <!-- favicon end -->
  <?php if (isset($lightbox)) { ?>
    <link rel="stylesheet" href="css/simple-lightbox.min.css" />
  <?php } ?>
  <?php if (isset($splide)) { ?>
    <link rel="stylesheet" href="css/splide.min.css" />
  <?php } ?>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/style-dark.css" />
</head>

<body>
  <!-- <header class="header" style="background-color: <?php /* echo $theme === "dark" ? "black" : "grey";*/ ?>"> -->
  <header class="header">
    <div class="container">
      <div class="header-wrap">
        <a href="index.php" class="logo">
          <img src="img/logo.svg" width="80" height="80" alt="Doctor Who official logo" />
        </a>
        <span class="burger"></span>
        <nav class="header-nav">
          <a href="index.php" class="<?php if ($page == 'index.php') {
                                        echo 'is-active';
                                      } ?>">Hlavná</a>
          <a href="about.php" class="<?php if ($page == 'about.php') {
                                        echo 'is-active';
                                      } ?>">O Doktorovi</a>
          <a href="enemy.php" class="<?php if ($page == 'enemy.php') {
                                        echo 'is-active';
                                      } ?>">Nepriatelia</a>
          <a href="qna.php" class="<?php if ($page == 'qna.php') {
                                      echo 'is-active';
                                    } ?>">FAQ</a>
          <!--a href="feedback.php" class="<?php if ($page == 'feedback.php') {
                                              echo 'is-active';
                                            } ?>">Feedback</a-->
          <a href="contact.php" class="<?php if ($page == 'contact.php') {
                                          echo 'is-active';
                                        } ?>">Kontakt</a>
          <?php if (isset($_SESSION['login'])) {
            echo '<a href="/doctor-who/adm/index.php">Prihlasený: ' . $_SESSION['login'] . $_SESSION['role'] . '</a>';
          } else {
            echo '<a href="/doctor-who/login.php">Prihlasiť sa</a>';
          } ?>

          <div class="theme-switch-wrap">
            <!-- <a href=<?php /* echo $theme === "dark" ? "?theme=light" : "?theme=dark" */; ?>>Zmena témy</a> -->
            <button type="button" class="theme-switch" data-theme-toggle-light>Svetlá téma</button>
            <button type="button" class="theme-switch" data-theme-toggle-dark>Tmavá téma</button>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <main class="main">