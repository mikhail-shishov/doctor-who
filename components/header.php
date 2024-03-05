<?php $page = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php if (isset($meta_description)) { ?>
    <meta name="description" content="<?php echo ($meta_description) ?>" />
  <?php } else { ?>
    <meta name="description" content="Viac o Doctor Who môžete dozvedieť na našej stranke." />
  <?php } ?>

  <meta name="keywords" content="doktor, páni, času" />
  <meta name="author" content="Mikhail Shishov" />

  <title>
    <?php if (isset($meta_title)) { ?>
      <?php echo ($meta_title." | Doctor Who") ?>
    <?php } else { ?>
      Blog | Doctor Who
    <?php } ?>
  </title>

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
        <a href="index.php" class="logo">
          <img src="img/logo.svg" width="80" height="80" alt="Doctor Who official logo" />
        </a>
        <span class="burger"></span>
        <nav class="header-nav">
          <a href="index.php" class="<?php if($page == 'index.php'){ echo 'is-active';}?>">Hlavná</a>
          <a href="about.php" class="<?php if($page == 'about.php'){ echo 'is-active';}?>">O Doktorovi</a>
          <a href="enemy.php" class="<?php if($page == 'enemy.php'){ echo 'is-active';}?>">Nepriateľia</a>
          <a href="contact.php" class="<?php if($page == 'contact.php'){ echo 'is-active';}?>">Kontakt</a>
        </nav>
      </div>
    </div>
  </header>
  <main class="main">