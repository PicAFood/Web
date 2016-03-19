<!DOCTYPE html>
<html>
    <head>
        <title>Pic A Food</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <script src="businesses.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
          include("common.php"); 
          displayHead();
        ?>
        <div id="container">
            <?php
                include("sample.php");
                $ll = $_GET['lat']. ",". $_GET['long'];
                $type = $_GET['type'];
                $data = getPics($type,$ll);
                foreach($data as $name => $link){ ?>
                    <div class="square box" onclick="viewBusiness(this.id)" style="display: inline-block" id="<?=$name?>">
                        <span class="overlay"><?= trim($name) ?></span>
                        <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                    </div>
                <?php } ?>
        </div>
    </body>
</html>