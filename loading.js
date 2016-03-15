window.onload = function () {
	updateAnimation();
}

window.onresize = function () {
	updateAnimation();
}

function updateAnimation() {
	var squaresInRow = Math.floor(window.innerWidth/220);
	var squares = document.querySelectorAll(".square");
	var delay = 0.1;
	for(var i = 0; i < squares.length; i++){
		if(i % squaresInRow == 0){
			delay = 0.1;
		}
		squares[i].style.animationDelay= delay + "s";
		delay += 0.1;
	}
}