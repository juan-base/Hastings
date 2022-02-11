
<section id="contact-menu">
    <div class="flex">
        <div class="contact-menu-left-margin"></div>
        <div class="contact-menu-center">
            <div class="flex flex-mobile">
                <div class="exit-container-mobile">
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-x.svg" alt="">
                </div>
                <div class="logo-container">
                    <div id="contact-logo">
                        <img src="<?php bloginfo('stylesheet_directory')?>/img/HAA_logo-01-r.svg" alt="">
                    </div>
                </div>
                <div class="contact-center"></div>
                <!-- empty container -->
                <div class="info-container">
                    <ul class="nav-items">
                        <li><a href="javascript:void(0)" id="goToPractice">Practice</a></li>
                        <li><a href="javascript:void(0)" id="goToPortfolio">Portfolio</a></li>
                    </ul>
                    <ul class="nav-items" id="secondary-nav">
                        <li><a href="tel:<?=get_field("phone","option")?>"><?=get_field("phone","option")?></a></li>
                        <li><a href="mailto:<?=get_field("general_inquiries_link","option")?>">General Inquiries</a></li>
                        <li><a href="mailto:<?=get_field("career_inquiries_link","option")?>">Career Inquiries</a></li>
                    </ul>
                    <ul class="social-media">
                        <li class="hastings has-facebook"><a href="<?=get_field("facebook","option")?>"></a></li>
                        <li class="hastings has-instagram"><a href="<?=get_field("instagram","option")?>"></a></li>
                        <li class="hastings has-linkedin"><a href="<?=get_field("linkedin","option")?>"></a></li>
                        <!-- <li class="hastings has-other"><a href="<?=get_field("xxx","option")?>"></a></li> -->
                    </ul>
                    <div id="mailing-list-wrapper" class="col-content">
                        <div class="">
                            <div class="newsletter-label">
                                Suscribe to our newsletter
                            </div>
                            <div class="flex newsletter-fields">
                                <div class="newsletter-input-field">
                                    <input type="text" placeholder="Email Address" id="newsletter-email-2" /> 
                                </div>
                                <div class="newsletter-submit-field" rel="2">
                                    Submit &#8594;
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
        <div class="contact-menu-right-margin">
            <div class="exit-container">
                <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-x.svg" alt="">
            </div>
        </div>
    </div>
</section>
