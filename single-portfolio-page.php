<?php 
global $isMobile;

$protected = post_password_required();

    ?>
    <section id="page-<?=$post->ID?>" class="project-page" protected="<?=$protected?"yes":"no"?>">

        <p class="nxt-btn" onClick="nxtBtnClicked(this)"><span>Next Project</span></p>
        
        <div class="project-container">
        
            <div class="project-title">
                
                <?php
                    /*
                    $the_title = get_field('title');

                    if (!empty($the_title)){ ?> 
                        <div class="name"><?= $the_title ?></div> <?php
                    } else { ?>
                        <div class="name"><?= get_the_title() ?></div> <?php
                    }
                    */

                    $title = get_the_title();
                    $title = str_replace("Protected:","", $title);
                ?>
                <div class="name"><?= $title ?></div>
                
            </div>

            <?php if (!$protected) { ?>

            <div class="flex">

                <div class="project-margin-left"></div> <!-- LEFT MARGIN -->

                <div class="project-center">


                    <?php

                        $modules = get_field('modules');

                        foreach ($modules as $module) {
                            include "modules_portfolio/module-" . $module['type'] . ".php";
                        }

                    ?>

                </div>
                
                <div class="project-margin-right"></div> <!-- RIGHT MARGIN -->
                
            </div> 
                
            <div class="flex">    
                
                <div class="project-margin-left"></div> <!-- LEFT MARGIN -->
                
                <div class="project-center">
                    
                    <div class="flex tables-container mobile-flex">

                        <div class="left-sub-content-container">

                            <div class="single-content-container">

                                <table class="about-content-about">
                                
                                    <?php
                                        
                                        $which = 1;
                                    
                                        include 'modules_portfolio/module-pr-footer.php';

                                    ?> 

                                </table>

                            </div>

                        </div>

                        <div class="center-margin"></div>

                        <div class="right-sub-content-container">

                            <div class="double-content-container">

                                <table class="about-content-team">
                                
                                    <?php
                                        
                                        $which = 2;
                                    
                                        include 'modules_portfolio/module-pr-footer.php';

                                    ?> 

                                </table>

                            </div>

                        </div>

                </div>
                
                <div class="project-margin-right"></div>
                
            </div>

            <?php } else { ?>
                
                <div class="project-desc-content">
                    <?php the_content(); ?>
                </div>

            <?php } ?>

            <div class="nxt-hover" onClick="nxtBtnClicked(this)"><div>

        </div>
        
    </section>
