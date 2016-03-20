<?php
	# displays the h1 saying Pic-A-Food, making it clickable to go back 
	# to the home page. FIXME when moved to a different host/url
	function displayHead() { 
		$home = preg_match("/.*\/PicFood\//", $_SERVER[REQUEST_URI], $matches); 
		$val = $matches[0]; ?>
		<h1><a href="<?= "http://$_SERVER[HTTP_HOST]$val"; ?>">Pic-A-Food</a></h1> 
	<?php }

	# list of main cuisines to be displayed. called in index.php
	# anything added here will automatically be shown
	function getMainCuisines() {
		$mainCuisines["American"] = 
				"cuisines/american.png";
        $mainCuisines["Thai"] = 
        		"cuisines/thai.png";
        $mainCuisines["Vietnamese"] = 
        		"cuisines/vietnamese.png";
        $mainCuisines["Chinese"] = 
        		"cuisines/chinese.png"; 
        $mainCuisines["Greek"] = 
        		"cuisines/greek.png";
        $mainCuisines["Indian"] = 
        		"cuisines/indian.png"; 
        return $mainCuisines;
	}

	# list of side cuisines to be displayed. called in index.php
	# anything added here will automatically be shown
	function getSideCuisines() {
		$sideCuisines["Ice Cream"] = 
				"cuisines/icecream.png"; 
        $sideCuisines["Bubble Tea"] = 
        		"cuisines/bubbletea.jpg";
 	    $sideCuisines["Pastries"] = 
 	    		"cuisines/pastries.png"; 
        $sideCuisines["Coffee"] = 
        		"cuisines/coffee.jpg";
        return $sideCuisines;
	}

	# displays a single square in with a mouseover text of $name
	# and a background image with the url of $link
	function displaySquare($name, $link) { ?>
		<div class="square box" onclick="cuisineSelected(this.id)" id="<?= $name ?>">
            <span class="overlay"><?= trim($name) ?></span>
            <div class="bg" style="background-image: url(<?= $link ?>);"></div>
        </div>
	<?php }
?>