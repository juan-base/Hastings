<?php ob_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- wp_head() -->
    <?php wp_head() ?>

    <?php 
      global $hastings, $isMobile; 

      $home_page = get_field('home_page', 'option');
      $portfolios_page = get_field('portfolios_page', 'option');
      $practices_page = get_field('practices_page', 'option');
    ?>

    <?php
      $thumbnail = "";
      if (is_single()) {
        $thumbnail = get_field("thumbnail");
        if ($thumbnail) {
          ?><meta property="og:image" content="<?=$thumbnail["url"]?>"><?php
        }
      }
    ?>


    <!-- HARDCODED HEAD -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1'/>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/style.css?v=<?=time()?>" />
		<?php if ($isMobile) { ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/style<?= $isMobile ? "-mobile" : ""; ?>.css?v=<?=time()?>" />
		<?php } ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.mousewheel.js"></script>
    <script src="<?php bloginfo('stylesheet_directory');?>/js/animations<?= $isMobile ? "-mobile" : ""; ?>.js?v=<?=time()?>"></script>
    <script src="<?php bloginfo('stylesheet_directory');?>/js/video.js"></script>
    <script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>

    <script src="<?php bloginfo('stylesheet_directory');?>/js/lazysizes.min.js" async=""></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-87220203-1', 'auto');
			ga('send', 'pageview');
		</script>

    <script>
      var thisURL = window.location.href;
      var isMobile = <?= $isMobile ? "true" : "false"; ?>;
      var stylesheet_directory = "<?php bloginfo('stylesheet_directory')?>/";

      var router_var = {
        root : "<?=$_SERVER["HTTP_HOST"]?>",
        init : "<?=$hastings->getInitRoute()?>",

        home : {
          id : <?=$home_page->ID?>,
          title : "<?=$hastings->yoastVariableToTitle($home_page->ID)?>",
          url : "<?=get_home_url()?>",
          type : "home"
        },

        practices : {
          id : <?=$practices_page->ID?>,
          title : "<?=$hastings->yoastVariableToTitle($practices_page->ID)?>",
          url : "<?=get_permalink($practices_page->ID)?>",
          type : "practices"        
        },

        portfolios : {
          id : <?=$portfolios_page->ID?>,
          title : "<?=$hastings->yoastVariableToTitle($portfolios_page->ID)?>",
          url : "<?=get_permalink($portfolios_page->ID)?>",
          type : "portfolios"        
        },

      }

      if (router_var.init == "home") router_var.home.title = document.title;
      if (router_var.init == "portfolios") router_var.portfolios.title = document.title;
      if (router_var.init == "practices" || router_var.init == "bio") router_var.practices.title = document.title;

      <?php
      if (is_front_page()) { ?>
        setRoute(router_var.home, true); <?php
      } else { ?>
			
			<?php
			}
      ?>


    </script>
    
</head>
<body>