<?php 

    $images = $module['gallary'];
    
    //print "hello" . "<br><br>" . $which;

//    print_r($images);

    foreach ($images as $image) {
        $column = $image['column'];
        if ($column == $which){
            include 'module-gallary-' . $image['image_type'] . '.php';
        }
    }

?>