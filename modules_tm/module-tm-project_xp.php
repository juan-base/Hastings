<div class="profile-experience">

<div class="font-medium"><?= $sub_module['title'] ?></div>

    <?php 
    
    
    $posts = $sub_module['project_xp'];
    
    if( $posts ): 
        foreach ($posts as $p): ?>
    
            <a href="javascript:void(0)" onClick="goToPortfolioPage(<?=$p->ID?>)"><?php echo get_the_title( $p->ID ); ?></a><br>
            
        <?php endforeach;
    endif;
    
    ?>

</div>




<?php 
