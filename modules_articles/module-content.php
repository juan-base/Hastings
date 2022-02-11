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

                <div class="content-content">

                    <div class="content-share-desktop">
                    <?php 
                        $show_social = $module['social'];
                        
                        if($show_social == 1 ) {
                            include 'module-content-social.php';
                        }
                    ?>
                    </div>

                    <?= !empty($module['content']) ? $module['content'] : "" ?>

                    <?php 
                    
                        $show_tags = $module['tags'];
                    
                        $mobile = 0;

                        if ($show_tags == 1) {
                            $mobile = 1;
                            include 'module-content-tags.php';
                        }
                    
                    ?>
                    
                </div>

            </div>

        </div>

    </div>

    <div class="listing-right-margin"></div>

</div>
