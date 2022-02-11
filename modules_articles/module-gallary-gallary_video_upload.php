<?php 
    $poster = $image['gallary_poster_image'];
    $autoplay = $poster == "" ? 'autoplay="autoplay" playsinline muted' : "";
    $gallary_video = $image['gallary_video_upload' . ($isMobile?"_mobile":"")];
    $play_btn = "";

    if ($poster == ""){
        $play_btn = "display:none";
    };

?>

<?php if (!$isMobile) { ?>
<div class="play-btn" style="<?= $play_btn ?>"><img src="<?php bloginfo('stylesheet_directory');?>/img/play-btn.png" alt=""></div>
<?php } ?>

<div class="pause-btn"><img src="<?php bloginfo('stylesheet_directory');?>/img/pause.png" alt=""></div>
<video id="video-<?= $gallary_video['id']?>" class="gallary-video" loop="loop" preload="auto" <?= $autoplay ?> poster="<?= $poster['url'] ?>" src="<?= $gallary_video['url'] ?>" rel="module-gallary-gallary_video_upload"></video>
