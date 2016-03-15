<!DOCTYPE html>
<html>
    <head>
        <title>Pic A Food</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>Pic-A-Food</h1> 
        <div id="container">
            <?php
                include("sample.php");
                $ll = $_GET['lat'].",".$_GET['long'];
                $data = getPics('thai',$ll);
                foreach($data as $name => $link){ ?>
                    <div class="square box">
                        <span class="overlay"><?= trim($name) ?></span>
                        <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                    </div>
                <?php } ?>
        </div>
    </body>
</html>