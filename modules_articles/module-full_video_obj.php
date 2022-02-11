<?php 
    $video = $module['full_video_obj' . ($isMobile?"_mobile":"")];
    $poster = $module['poster_image'];
    $autoplay = $poster == "" ? 'autoplay="autoplay" playsinline muted' : "";
    $play_btn = "";

    if ($poster == ""){
        $play_btn = "display:none";
    };
    
?>

<?php if (!$isMobile) { ?>
<div class="play-btn" style="<?= $play_btn ?>"><img src="<?php bloginfo('stylesheet_directory');?>/img/play-btn.png" alt=""></div>
<?php } ?>

<div class="pause-btn"><img src="<?php bloginfo('stylesheet_directory');?>/img/pause.png" alt=""></div>
<video class="autoplay" loop="loop" preload="auto"  <?= $autoplay ?> src="<?= $video ?>" poster="<?= $poster['url'] ?>" rel="module-full_video_obj"></video> 
