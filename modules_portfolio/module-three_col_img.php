<?php 
		$dbl_img = $module['three_col_img'];
		$thumb_size = $isMobile ? "mobile_inside" : "desktop_full";
		$dbl_img["url"] = isset($dbl_img["sizes"]) && isset($dbl_img["sizes"][$thumb_size]) ? $dbl_img["sizes"][$thumb_size] : $dbl_img["url"];
?>

<div class="flex mobile-flex gallary-project">

    <div class="double-img-container <?= !empty($dbl_img["url"])?"add_loading":"" ?>">
        
        <img src="<?= $dbl_img['url']  ?>" alt="<?= $dbl_img['alt']  ?>" rel="module-three_col_img">

    </div>

</div>    