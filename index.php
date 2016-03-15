<!DOCTYPE html>
<html>
    <head>
        <title>Pic A Food</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>Pic-A-Food</h1>  
        <div class="sk-cube-grid">
          <div class="sk-cube sk-cube1"></div>
          <div class="sk-cube sk-cube2"></div>
          <div class="sk-cube sk-cube3"></div>
          <div class="sk-cube sk-cube4"></div>
          <div class="sk-cube sk-cube5"></div>
          <div class="sk-cube sk-cube6"></div>
          <div class="sk-cube sk-cube7"></div>
          <div class="sk-cube sk-cube8"></div>
          <div class="sk-cube sk-cube9"></div>
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
                window.location.replace("https://webster.cs.washington.edu/students/akash221/PicFood/foodgrid.php?lat=" + Math.round(lat*10000)/10000 + "&long=" + Math.round(long*10000)/10000);
            }

        </script> 
    </body>
</html>