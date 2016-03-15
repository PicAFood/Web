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
                $data = getPics('food', 'new york','47.6563,-145.3146');
                foreach($data as $name => $link){ ?>
                    <div title="<?= $name ?>" class="box">
                        <span class="overlay"><?= $name ?></span>
                        <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                    </div>
                <?php }
            ?>
        </div>
        
    </body>
</html>