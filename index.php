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
              $cuisines["Ice Cream"] = "http://abeautifulmess.typepad.com/.a/6a00d8358081ff69e2017d42b02923970c-800wi"; 
              $cuisines["Bubble Tea"] = "https://ucd.spoonuniversity.com/wp-content/uploads/sites/184/2015/11/o-BOBA-facebook.jpg";
              $cuisines["Pastries"] = "http://www.duraneurosandwich.com/wp-content/uploads/2014/05/Pastries-back1-2400.jpg"; 
            ?>
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
              var rows = document.querySelectorAll('#cuisines');
              for(var i = 0; i < rows.length; i++) {
                rows[i].style.display = "none";
              }
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