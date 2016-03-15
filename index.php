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
                $data = getPics('food','47.6567,-122.31003');
                foreach($data as $name => $link){ ?>
                    <div title="<?= $name ?>" class="box">
                        <span class="overlay"><?= $name ?></span>
                        <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                    </div>
                <?php }
            ?>
        </div>
        
    </body>
    <script type="text/javascript">
        navigator.geolocation.getCurrentPosition(GetLocation);
        function GetLocation(location) {
            alert(location.coords.latitude);
            alert(location.coords.longitude);
            alert(location.coords.accuracy);
        }
    </script>
</html>