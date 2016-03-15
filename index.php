<!DOCTYPE html>
<html>
    <head>
        <title>Pic A Food</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <script src="loading.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Pic-A-Food</h1>  
        <div id ="container">
          <div class="sk-cube-grid">
            <?php
              for($i = 1; $i <= 18; $i++){ ?>
                <div class="sk-cube sk-cube<?= $i ?> square"></div>
              <?php }
            ?>
          </div>
        </div>
        <script type="text/javascript">
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(successFunction);
            } else {
                alert('It seems like Geolocation, which is required for this page, is not enabled in your browser. Please use a browser which supports it.');
            }

            function successFunction(position) {
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                var url = window.location.href + "foodgrid.php?lat=" + Math.round(lat*10000)/10000 + "&long=" + Math.round(long*10000)/10000;
                window.location.replace(url);
            }

        </script> 
    </body>
</html>