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
            $cuisines["American"] = "http://las-vegas.eat24hours.com/files/cuisines/v4/american.jpg";
            $cuisines["Thai"] = "http://www.thaidelightalaska.com/backend/uploads/products/34-banner-20150805103120B5.jpg";
            $cuisines["Vietnamese"] = "http://media.crossingtravel.com/files/tag/2015/09/26/image-163.jpg";
            $cuisines["Chinese"] = "http://houston.eat24hours.com/files/cuisines/v4/chinese.jpg"; 
            $cuisines["Greek"] = "https://img.grouponcdn.com/deal/mNM6qDkg3TZ4Kv4x6gh7/Ua-700x420/v1/c700x420.jpg";
            $cuisines["Indian"] = "http://insidenirvana.com/wp-content/uploads/2015/08/best-indian-food-new-orleans.jpg"; 

            ?>
            <div id="cuisines">
            <?php foreach($cuisines as $name => $link) { ?>
                <div class="square box" onclick="buisnessSelected(this.id)" id="<?= $name ?>">
                    <span class="overlay"><?= trim($name) ?></span>
                    <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                </div>
            <?php } ?>
            </div>

            <?php
              $cuisines = "";
              $cuisines["Ice Cream"] = "http://www.newhealthadvisor.com/images/1HT02932/ice%20cream.jpg"; 
              $cuisines["Bubble Tea"] = "http://media1.fdncms.com/thecoast/imager/georges-bubble-tea/u/zoom/4683750/george_sbubbletea1.jpg";
              $cuisines["Pastries"] = "http://www.duraneurosandwich.com/wp-content/uploads/2014/05/Pastries-back1-2400.jpg"; 
              $cuisines["Coffee"] = "https://vacationidahosprings.files.wordpress.com/2011/07/coffee-cups.jpg";
            ?>
            <div id="cuisines">
            <?php foreach($cuisines as $name => $link) { ?>
                <div class="square box" onclick="buisnessSelected(this.id)" id="<?=$name?>">
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