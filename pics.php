<?php
    function printImages(){
        $images = glob("/images/*.jpg");
        foreach($images as $image){ ?>
            <img src="<?php print $image; ?>" />
        <?php }
    }
?>