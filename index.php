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
            <?php foreach($mainCuisines as $name => $link) { 
              displaySquare($name, $link);    
            } ?>
          </div>

          <?php
            $sideCuisines = getSideCuisines();
          ?>
          <div id="cuisines">
            <?php foreach($sideCuisines as $name => $link) {
                displaySquare($name, $link);
            } ?>
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