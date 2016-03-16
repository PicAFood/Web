window.onload = function () {
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
	var squaresInRow = Math.floor(window.innerWidth/220);
	var squares = document.querySelectorAll(".square");
	var delay = 0.1;
	for(var i = 0; i < squares.length; i++){
		// if new row, reset delay
<<<<<<< HEAD
		if(i % squaresInRow === 0) {
			delay = 0.1;
=======
		if(i % squaresInRow == 0){
			delay = 0.1; 
>>>>>>> 5e49d03cf3154998eab7251a91f5068ebb332170
		}
		squares[i].style.animationDelay= delay + "s";
		delay += 0.1;
	}
}