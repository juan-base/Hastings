<?php 

    $images = $module['gallary'];

    foreach ($images as $image) {
        $column = $image['side'];
        if ($column == $which){
            include 'module-gallary-' . $image['image_type'] . '.php';
        }
    }

?>