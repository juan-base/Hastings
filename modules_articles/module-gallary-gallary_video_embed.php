<?php

    $url = $image['gallary_video_embed'];
    $embed = "https://www.youtube.com/embed/";

    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    $youtube_id = $match[1];
    
    $full_url = $embed . $youtube_id;

//    print $full_url;

?>


<iframe class="autoplay" loop="loop" preload="auto" autoplay="autoplay" playsinline muted src=" <?= $full_url ?>"></iframe>
