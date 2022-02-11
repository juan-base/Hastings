<?php 
	global $isMobile;
?>
<section id="page-<?=$post->ID?>" class="listing-page">
    
	<p class="nxt-btn" onClick="nxtBtnClicked(this)"><span>Next Article</span></p>

    <div class="practice-container">
        
        <div class="listing-title">

            <div class="listing-name"><?= get_the_title() ?></div>
            
            <?php 
                ob_start();
                    $author_type = get_field('author');
    
                    if ( $author_type == 'team_member' ) {
                        
                        $team_members = get_field('team_member');
                        
                        if ($team_members):
                        
                            foreach ($team_members as $tm ) : ?>
                                
                                by <a href="javascript:void(0)" onClick="goToPracticePage(<?= $tm->ID ?>)"><?php print get_the_title( $tm->ID );?></a><?php
                        
                            endforeach;
                        
                        endif;
                        
                    }
                
                    if ( $author_type == 'custom' ) {
                        print get_field('custom') ;
                    }
                
                    $listing_type = get_field('type');
                
                    if ( $listing_type == 'job' ) {
                        print get_field('sub_title');
                    }
                $subtitle = ob_get_clean();

                if (!empty($subtitle)) {
                    ?><div class="listing-sub"><?=$subtitle?></div><?php
                }
            ?>
        </div>
        
        <?php

            $modules = get_field('modules');

            foreach ($modules as $module) {
//                print "<pre>";print_r($module['content']);print "</pre>";
                include "modules_articles/module-" . $module['sub_type'] . ".php";
                
                if ($listing_type == 'job'){
                    include 'modules_articles/module-content.php';
                }
            }

        ?>

        <div class="content-share-mobile">

            <?php 
            
                include 'modules_articles/module-content-social.php';
            
            ?>

        </div>

		<div class="nxt-hover" onClick="nxtBtnClicked(this)"><div>

    </div>  

 
</section>

