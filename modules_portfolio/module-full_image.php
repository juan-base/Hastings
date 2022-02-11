<?php 
		$full_img = $module['image'];
		$thumb_size = $isMobile ? "mobile_inside" : "desktop_full";
		$full_img["url"] = isset($full_img["sizes"]) && isset($full_img["sizes"][$thumb_size]) ? $full_img["sizes"][$thumb_size] : $full_img["url"];
?>

<div class="project-img <?= !empty($full_img["url"])?"add_loading":"" ?>">
    
    <img src="<?= $full_img['url'] ?>" alt="<?= $full_img['alt'] ?>" rel="module-full_image" data-mobile="<?=$isMobile?"YES":"NO"?>">
    
</div>
