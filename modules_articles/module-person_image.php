<div class="flex content-container">

    <div class="listing-left-margin"></div>

    <div class="listing-center">

        <div class="listing-content">

            <div class="flex">

                <div class="content-share">
                
                    <?php 
                    /*
                        $show_social = $module['social'];

                        if($show_social == 1 ) {
                            include 'module-content-social.php';
                        }
                    */
                    ?>

                </div>
               
                <div class="content-center">

                </div>

                <?php 
                
                        $person_image = $module['person_image'];
                        $thumb_size = $isMobile ? "mobile_inside" : "desktop_full";
                        $person_image["url"] = isset($person_image["sizes"]) && isset($person_image["sizes"][$thumb_size]) ? $person_image["sizes"][$thumb_size] : $person_image["url"];
                
                ?>

                <div class="content-content">

                    <div class="content-share-desktop">
                        <?php 
                            $show_social = $module['social'];
                            
                            if($show_social == 1 ) {
                                include 'module-content-social.php';
                            }
                        ?>
                    </div>

                    <div class="content-img-container <?= !empty($person_image["url"])?"add_loading":"" ?> <?= empty($module['content']) ? "sm-img" : "" ?>">

                        <img src="<?= $person_image['url']; ?>" alt="<?= $person_image['alt']; ?>" rel="module-person_image">

                    </div>
                    
                </div>

            </div>

        </div>

    </div>

    <div class="listing-right-margin"></div>

</div>
    

    
    
