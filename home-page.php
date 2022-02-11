<div class="loading">
    <div class="loading-text">
        <span class="loading-text-words">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-H.svg" alt="Hastings Architecture">
				</span>
    </div>
</div>

<div id="main_wrapper">

  <?php include "index-single-practices.php" ?>

  <?php include "index-practice.php" ?>

  <?php include "index-portfolio.php" ?>

  <?php include "index-single-portfolios.php" ?>


  <div id="scrollCoverCenter"></div>
  <div id="scrollCoverPractice"></div>
  <div id="scrollCoverPorfolio"></div>

</div>

<div id="two_helper"></div>
<div id="practice-hidden"></div>

<div id="three_helper"></div>
<div id="portfolio-hidden"></div>

<div id="navbar">
    <div class="box">
        <div id="practiceNav" class="cell practice">
            <div class="topFiltersWrapper">
                <div id="windowLeftBtn" class="practice-filters practice-filters-1col practice-filters-2col"><a href="javascript:void(0)">Practice</a></div>
                <div id="practice-filters" class="practice-filters practice-filters-3col">
                    <div id="search-icon-practice">
                        <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-search.svg">
                    </div>
                    <div id="practice-filter-5"><a href="javascript:void(0)" class="practice-filter" rel="about">About</a></div>
                    <div id="practice-filter-4"><a href="javascript:void(0)" class="practice-filter" rel="job">Careers</a></div>
                    <div id="practice-filter-1"><a href="javascript:void(0)" class="practice-filter" rel="news-ideas">News & Ideas</a></div>
                    <div id="practice-filter-3"><a href="javascript:void(0)" class="practice-filter" rel="bio">People</a></div>
                    <div id="practice-filter-2"><a href="javascript:void(0)" class="practice-filter" rel="recognition">Recognition</a></div>
                    <div id="practice-filter-tag"><a href="javascript:void(0)" class="practice-filter" rel="tag"></a></div>
                </div>
            </div>
        </div>
        <div id="portfolioNav" class="cell portfolio">
            <div class="topFiltersWrapper">
                <div id="windowRightBtn" class="portfolio-filters portfolio-filters-1col portfolio-filters-2col"><a href="javascript:void(0)">Portfolio</a></div>
                <div id="portfolio-filters" class="portfolio-filters portfolio-filters-3col">
                    <div id="portfolio-filter-tag"><a href="javascript:void(0)" class="portfolio-filter" rel="tag"></a></div>
                    <div id="portfolio-filter-5"><a href="javascript:void(0)" class="portfolio-filter" rel="academic">Academic</a></div>
                    <div id="portfolio-filter-2"><a href="javascript:void(0)" class="portfolio-filter" rel="Civic">Civic</a></div>
                    <div id="portfolio-filter-4"><a href="javascript:void(0)" class="portfolio-filter" rel="planning">Planning</a></div>
                    <div id="portfolio-filter-3"><a href="javascript:void(0)" class="portfolio-filter" rel="residential-hospitality">Residential & Hospitality</a></div>
                    <div id="portfolio-filter-1"><a href="javascript:void(0)" class="portfolio-filter" rel="workplace">Workplace</a></div>
                    <div id="search-icon-portfolio">
                        <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-search.svg">
                    </div>
                </div>
                <div id="portfolio-filtered" class="portfolio-filters portfolio-filtered">
                    <div class="portfolio-selected-category">***</div>
                    <div><img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-x.svg"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mainSiteIco">
    <div class="letter">
        <div class="H">
            <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-H.svg" alt="">
        </div>
        <div class="I">
            <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-H-hover.svg" alt="">
        </div>
        <div class="arrowUp">
            <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-H.svg" alt="">
            <!-- <img src="<?php bloginfo('stylesheet_directory')?>/img/symbol-arrow-u.svg" alt=""> -->
        </div>
    </div>
</div>

<div id="practice-sidebar">
    <div class="lt"></div>
    <div class="ct"></div>
    <div class="rt"></div>
</div>

<div id="portfolio-sidebar">
    <div class="lt"></div>
    <div class="ct"></div>
    <div class="rt"></div>
</div>

<section id="footer">
    <div class="flex">
        <div id="footer-left-margin"></div>
        <div id="footer-center">
            <div id="mailing-list-wrapper" class="col-content">
                <div class="flex">
                    <div class="col-name footer-box footer-box-1">
                        <div class="col-content">
                            Suscribe to our newsletter
                        </div>
                    </div>
                    <div class="col-email footer-box footer-box-2">
                        <div class="col-content flex newsletter-fields">
                            <div class="newsletter-input-field">
                                <input type="text" placeholder="Email Address"  id="newsletter-email-1" />
                            </div>
                            <div class="newsletter-submit-field" rel="1">
                                Submit &#8594;
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            <div id="footer-center-content">
                <div class="flex">
                    <div class="col-name footer-box footer-box-1">
                        <div class="col-content">
                            &copy; Hastings Architecture, LLC
                        </div>
                    </div>
                    <div class="col-email footer-box footer-box-2">
                        <div class="col-content">
                            <a href="mailto:<?=get_field("e-mail","option")?>"><?=get_field("e-mail","option")?></a>
                        </div>
                    </div>
                    <div class="col-address footer-box footer-box-3">
                        <div class="col-content">
                            <?=get_field("address","option")?>
                        </div>
                    </div>
                    <div class="col-contact footer-box footer-box-4">
                        <div class="col-content">
                            <div class="flex">
                                <?=get_field("phone","option")?>
                                <ul class="social-media social-footer">
                                    <li class="has-facebook f-footer "><a href="<?=get_field("facebook","option")?>"></a></li>
                                    <li class="has-instagram i-footer"><a href="<?=get_field("instagram","option")?>"></a></li>
                                    <li class="has-linkedin l-footer"><a href="<?=get_field("linkedin","option")?>"></a></li>
                                    <!-- <li class="has-other o-footer"><a href=""></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-right-margin"></div>
    </div>
</section>

<?php include "contact-menu.php"; ?>

<div xid="window_cover"></div>

<div id="iframe_wrapper">
    <div class="iframe_wrapper_close"><img src="http://hastingsarchitecture.com/wp-content/themes/Hastings/img/symbol-x.svg" alt=""></div>
    <iframe id="newsletter_iframe" src="<?php bloginfo('stylesheet_directory');?>/newsletter-submit.php" frameborder="0"></iframe>
</div>
