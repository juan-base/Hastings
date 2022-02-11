<div class="flex lg-img-container">

    <div class="img-container-left"></div>
    <div class="img-container-center">

        <div class="img-container">

            <?php
            
                include $module['full_video'] == "upload" ? 'module-full_video_obj.php' : 'module-full_video_url.php';
            
            ?>

        </div>

    </div>
    <div class="img-container-right"></div>

</div>
