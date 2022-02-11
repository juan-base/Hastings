<?php
		$gallary_img = $image['gallary_image'];
		$thumb_size = $isMobile ? "mobile_inside" : "desktop_full";
		$gallary_img["url"] = isset($gallary_img["sizes"]) && isset($gallary_img["sizes"][$thumb_size]) ? $gallary_img["sizes"][$thumb_size] : $gallary_img["url"];
?>

<div class="single-content-container <?= !empty($gallary_img["url"])?"add_loading":"" ?>">

    <img src="<?= $gallary_img['url'] ?>" alt="<?= $gallary_img['alt'] ?>" rel="module-gallary-gallary_image">

</div>