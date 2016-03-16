window.onload = function() {
    if (!document.cookie) {
        alert("first timer");
        setLocationCookies();
        lat = getCookie("lat");
        long = getCookie("long");
    }

    updateAnimation();
};

var type = "";
var lat;
var long;

// so that animation changes as the number of squares
// on the page change
window.onresize = function() {
    updateAnimation();
};

// updates the animations of the loading boxes
// based on the width of the window to achieve
// a left to right ease-in/ease-out animation
function updateAnimation() {
    var squaresInRow = Math.floor(window.innerWidth / 220);
    var squares = document.querySelectorAll(".loading");
    var delay = 0.1;
    for (var i = 0; i < squares.length; i++) {
        // if new row, reset delay
        if (i % squaresInRow === 0) {
            delay = 0.1;
        }
        squares[i].style.animationDelay = delay + "s";
        delay += 0.1;
    }
}

function setLocationCookies() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(successFunction);
    } else {
        alert('It seems like Geolocation, which is required for this page, is not enabled in your browser. Please use a browser which supports it.');
    }
}

function successFunction(position) {
    document.cookie = "lat=" + position.coords.latitude;
    document.cookie = "long=" + position.coords.longitude;
}

function buisnessSelected(type) {


    console.log(type);
    document.getElementsByClassName('sk-cube-grid')[0].style.display = "block";
    var rows = document.querySelectorAll('#cuisines');
    for (var i = 0; i < rows.length; i++) {
        rows[i].style.display = "none";
    }
    if (!isNaN(lat) && !isNaN(long)) {
        redirect(type, lat, long);
    } else {
        console.log("lat and long not set");
    }
}

function redirect(type, lat, long) {
    var url = window.location.href + "foodgrid.php?lat=" + Math.round(lat * 10000) / 10000 + "&long=" + Math.round(long * 10000) / 10000 + "&type=" + type;
    window.location.replace(url);
}

function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}