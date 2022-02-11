<!-- Share this 
<?php

    if ($listing_type == 'job'){
        ?> opportunity <?php ;
    } else {
        print $listing_type;  
    }

?> -->

<ul class="social-media-share" rel="ok">
    <li>
        <a href="# " target="_app" onClick="MyWindow=window.open('http://www.facebook.com/sharer/sharer.php?u=<?= get_permalink() ?>','MyWindow','width=600,height=350'); return false;">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/fb.svg" alt="Facebook" >
        </a>
    </li>
    
    <li>
        <a href="" target="_app"
        onClick="MyWindow=window.open('http://twitter.com/share?url=<?= get_permalink() ?>','MyWindow','width=650,height=300'); return false;">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/tw.svg" alt="Tweeter" >
        </a>
    </li>
    
    <li>
        <a href="#" target="_app" 
        onClick="MyWindow=window.open('http://www.linkedin.com/shareArticle?url=<?= get_permalink() ?>&title=<?= get_the_title() ?>&summary=<?= get_field('intro') ?>&source=<?= get_permalink() ?>','MyWindow','width=650,height=600'); return false;">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/linkedin.svg" alt="Linkedin">
        </a>
    </li>
		<!--
    <li style="padding-top: 2px;">
        <a href="mailto:?subject=<?= get_the_title() ?>&body=<?= get_field('intro') . " -- " . get_permalink() ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/mail.svg" alt="EMail">
        </a>
    </li>
		-->
</ul>
