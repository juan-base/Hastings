<?php 

$full_img_a = $module['full_image'];
$thumb_size = $isMobile ? "mobile_inside" : "desktop_full";
$full_img_a["url"] = isset($full_img_a["sizes"]) && isset($full_img_a["sizes"][$thumb_size]) ? $full_img_a["sizes"][$thumb_size] : $full_img_a["url"];

if ($full_img_a['url']) {
?>

    <div class="flex lg-img-container">

        <div class="img-container-left"></div>
        <div class="img-container-center">

            <div class="img-container <?= !empty($full_img_a["url"])?"add_loading":"" ?>">

                <img src="<?= $full_img_a['url'] ?>" alt="<?= $full_img_a['alt'] ?>" rel="module-full_image">

            </div>

        </div>
        <div class="img-container-right"></div>

    </div>
<?php
}
