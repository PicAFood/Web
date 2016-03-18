<?php
	function displayHead() { 
		$home = preg_match("/.*\/PicFood\//", $_SERVER[REQUEST_URI], $matches); 
		$val = $matches[0]; ?>
		<h1><a href="<?= "http://$_SERVER[HTTP_HOST]$val"; ?>">Pic-A-Food</a></h1> 
	<?php }

	function getMainCuisines() {
		$mainCuisines["American"] = 
				"http://las-vegas.eat24hours.com/files/cuisines/v4/american.jpg";
        $mainCuisines["Thai"] = 
        		"http://www.thaidelightalaska.com/backend/uploads/products/34-banner-20150805103120B5.jpg";
        $mainCuisines["Vietnamese"] = 
        		"http://media.crossingtravel.com/files/tag/2015/09/26/image-163.jpg";
        $mainCuisines["Chinese"] = 
        		"http://houston.eat24hours.com/files/cuisines/v4/chinese.jpg"; 
        $mainCuisines["Greek"] = 
        		"https://img.grouponcdn.com/deal/mNM6qDkg3TZ4Kv4x6gh7/Ua-700x420/v1/c700x420.jpg";
        $mainCuisines["Indian"] = 
        		"http://insidenirvana.com/wp-content/uploads/2015/08/best-indian-food-new-orleans.jpg"; 
        return $mainCuisines;
	}

	function getSideCuisines() {
		$sideCuisines["Ice Cream"] = 
				"http://www.newhealthadvisor.com/images/1HT02932/ice%20cream.jpg"; 
        $sideCuisines["Bubble Tea"] = 
        		"http://media1.fdncms.com/thecoast/imager/georges-bubble-tea/u/zoom/4683750/george_sbubbletea1.jpg";
 	    $sideCuisines["Pastries"] = 
 	    		"http://www.duraneurosandwich.com/wp-content/uploads/2014/05/Pastries-back1-2400.jpg"; 
        $sideCuisines["Coffee"] = 
        		"https://vacationidahosprings.files.wordpress.com/2011/07/coffee-cups.jpg";
        return $sideCuisines;
	}
?>