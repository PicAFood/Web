window.onload = function () {
	setLocationCookies();

	updateAnimation();
};

// so that animation changes as the number of squares
// on the page change
window.onresize = function () {
	updateAnimation();
};

// updates the animations of the loading boxes
// based on the width of the window to achieve
// a left to right ease-in/ease-out animation
function updateAnimation() {
	var squaresInRow = Math.floor(window.innerWidth / 220);
	var squares = document.querySelectorAll(".loading");
	var delay = 0.1;
	for(var i = 0; i < squares.length; i++){
		// if new row, reset delay
		if(i % squaresInRow === 0) {
			delay = 0.1;
		}
		squares[i].style.animationDelay= delay + "s";
		delay += 0.1;
	}
}

function setLocationCookies(){
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