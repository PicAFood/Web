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
				"cuisines/american.jpg";
        $mainCuisines["Thai"] = 
        		"cuisines/thai.jpg";
        $mainCuisines["Vietnamese"] = 
        		"cuisines/vietnamese.jpg";
        $mainCuisines["Chinese"] = 
        		"cuisines/chinese.jpg"; 
        $mainCuisines["Greek"] = 
        		"cuisines/greek.jpg";
        $mainCuisines["Indian"] = 
        		"cuisines/indian.jpg"; 
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
 	    		"cuisines/pastries.jpg"; 
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