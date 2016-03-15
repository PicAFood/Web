<!DOCTYPE html>
<html>
    <head>
        <title>Pic A Food</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript">
            navigator.geolocation.getCurrentPosition(GetLocation);
            function GetLocation(location) {
                var url = window.location.href;
                if(!url.includes('lat')) {
                    location.coords.latitude;
                    location.coords.longitude;
                    location.coords.accuracy;
                    window.location.replace("https://webster.cs.washington.edu/students/akash221/PicFood/index.php?lat=" + location.coords.latitude + "&long=" + location.coords.longitude);
                }
            }
        </script>
    </head>
    <body>
        <h1>Pic-A-Food</h1> 
        <?php 
            if(!isset($_GET['lat'])) { ?>
                <p>Loading page</p> 
            <?php } else { s?>
        <div id="container">
            <?php 
                include("sample.php");
                $ll = $_GET['lat'].",".$_GET['long'];
                $data = getPics('food',$ll);
                foreach($data as $name => $link){ ?>
                    <div title="<?= $name ?>" class="box">
                        <span class="overlay"><?= $name ?></span>
                        <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                    </div>
                <?php }
            ?>
        </div>
        <?php } ?>
    </body>
</html>