<?php 

    $images = $modules['gallary'];
    
    print "hello";

    foreach ($images as $image) {
        $column = $images['column'];
        if ($column = $which){
            include 'module-gallary-' . $images['image_type'] . "php";
        }
    }

?>