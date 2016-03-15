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
          <?php
            $cuisines["Thai"] = "http://www.thaidelightalaska.com/backend/uploads/products/34-banner-20150805103120B5.jpg";
            $cuisines["American"] = "http://las-vegas.eat24hours.com/files/cuisines/v4/american.jpg";
            $cuisines["Chinese"] = "http://houston.eat24hours.com/files/cuisines/v4/chinese.jpg"; ?>
            <div id="cuisines">
            <?php foreach($cuisines as $name => $link) { ?>
                <div class="square box" onclick="buisnessSelected(this.id)" id="<?= $name ?>">
                    <span class="overlay"><?= trim($name) ?></span>
                    <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                </div>
            <?php } ?>
            </div>

          <div class="sk-cube-grid" style="display: none;">
            <?php
              for($i = 1; $i <= 18; $i++){ ?>
                <div class="sk-cube sk-cube<?= $i ?> square"></div>
              <?php }
            ?>
          </div>
        </div>
        <script type="text/javascript">
            var type = "";
            var lat;
            var long;

            function buisnessSelected(type) {
              console.log(type);
              document.getElementsByClassName('sk-cube-grid')[0].style.display = "block";
              document.getElementById('cuisines').style.display = "none";
              if(lat !== 0 && long !==0) {
                redirect(type,lat,long);
              } else {
                console.log("test");
              }
            }

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(successFunction);
            } else {
                alert('It seems like Geolocation, which is required for this page, is not enabled in your browser. Please use a browser which supports it.');
            }


            function successFunction(position) {
                lat = position.coords.latitude;
                long = position.coords.longitude;
            }

            function redirect(type, lat, long) {
                var url = window.location.href + "foodgrid.php?lat=" + Math.round(lat*10000)/10000 + "&long=" + Math.round(long*10000)/10000 + "&type=" + type;
                window.location.replace(url);
            }

        </script> 
    </body>
</html>