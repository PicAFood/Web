<!DOCTYPE html>
<html>
    <head>
        <title>Pic A Food</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <script src="loading.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
          include("common.php"); 
          displayHead();
        ?>
        <div id ="container">
          <?php
            $mainCuisines = getMainCuisines();
          ?>
          <div id="cuisines">
            <?php foreach($mainCuisines as $name => $link) { ?>
                <div class="square box" onclick="buisnessSelected(this.id)" id="<?= $name ?>">
                    <span class="overlay"><?= trim($name) ?></span>
                    <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                </div>
            <?php } ?>
          </div>

          <?php
            $sideCuisines = getSideCuisines();
          ?>
          <div id="cuisines">
            <?php foreach($sideCuisines as $name => $link) { ?>
                <div class="square box" onclick="buisnessSelected(this.id)" id="<?= $name ?>">
                    <span class="overlay"><?= trim($name) ?></span>
                    <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                </div>
            <?php } ?>
          </div>

          <div class="sk-cube-grid" style="display: none;">
            <?php
              for($i = 1; $i <= 18; $i++){ ?>
                <div class="sk-cube sk-cube<?= $i ?> square loading"></div>
              <?php }
            ?>
          </div>
        </div>
    </body>
</html>