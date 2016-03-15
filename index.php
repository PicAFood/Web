<!DOCTYPE html>
<html>
    <head>
        <title>Pic A Food</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <script src="index.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Pic-A-Food</h1>
        
        <div id="container">
            <?php 
                include("sample.php");
                $pic_urls = getPics('noodles', 'new york','47.6563,-122.3146');
                foreach($pic_urls as $url){ ?>
                    <div class="box">
                        <span class="overlay"><?= $image ?></span>
                        <div class="bg" style="background-image: url(<?= $url ?>);"></div>
                    </div>
                <?php }
            ?>
        </div>
        
    </body>
</html>