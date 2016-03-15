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
                $cuisines;
                $cuisines["Thai"] = "http://www.thaidelightalaska.com/backend/uploads/products/34-banner-20150805103120B5.jpg";
                $cuisines["American"] = "http://las-vegas.eat24hours.com/files/cuisines/v4/american.jpg";
                $cuisines["Chinese"] = "http://houston.eat24hours.com/files/cuisines/v4/chinese.jpg";

                foreach($cuisines as $name => $link){ ?>
                    <div class="box" onclick()="buisnessSelected" id="<?= $name ?>">
                        <span class="overlay"><?= trim($name) ?></span>
                        <div class="bg" style="background-image: url(<?= $link ?>);"></div>
                    </div>
                <?php } ?>
        </div>
        <script type="text/javascript">
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(successFunction);
            } else {
                alert('It seems like Geolocation, which is required for this page, is not enabled in your browser. Please use a browser which supports it.');
            }

            function buisnessSelected() {
                var url = window.location.href + "index.php?type=" + this.id;
                window.location.replace(url);
            }

        </script> 
    </body>
</html>