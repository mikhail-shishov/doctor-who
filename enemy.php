<?php
$meta_title = 'Nepriatelia';
$meta_description = 'Doktor má veľa nepriateľov, s ktorými neustále bojuje. Mnohé z nich predstavujú nebezpečenstvo pre ľudí, ale Doktor miluje ľudí a snaží sa ich chrániť.';
$og_image = 'img/enemy/dalek.jpeg';
?>

<?php include_once 'components/header.php' ?>
<div class="enemy-page-sect">
  <div class="container">
    <h1 class="h1">Nepriateľia</h1>
    <p class="text text-big">Doktor má veľa nepriateľov, s ktorými neustále bojuje. Mnohé z nich predstavujú nebezpečenstvo pre ľudí, ale Doktor miluje ľudí a snaží sa ich chrániť. Niektoré z nepriateľov sa menia z epizódy na epizódu, niektoré však zostávajú počas sezón. O týchto chcem povedať viac.</p>

    <div class="tab-group" data-tab-group="enemy">
      <?php require_once 'adm/classes/enemy.php';
      $enemy = new Enemy();
      $enemy->getEnemy();
      ?>
    </div>
  </div>
</div>
<?php include_once 'components/footer.php' ?>