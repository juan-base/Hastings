<?php 
	include "index-single-practices.php";
?>

<div id="home-mobile">
	<?php 
	include "home-header.php";
	?>

	<div id="mobile-thumbs" class="loading">

		<?php
		include "index-practice.php";
		include "index-portfolio.php";
		?>

	</div>

	<div id="footer">
		<div class="info">
			<a href="mailto:<?=get_field("e-mail","option")?>"><?=get_field("e-mail","option")?></a><br>
			<a href="tel:<?=get_field("phone","option")?>"><?=get_field("phone","option")?></a>
		</div>
	</div>
</div>

<?php 
	include "index-single-portfolios.php";
	include "navbar-mobile.php";
	include "contact-menu.php";
	include "filters-mobile.php";
?>

<div id="window_cover"></div>

<div id="iframe_wrapper">
    <div class="iframe_wrapper_close"><img src="http://hastingsarchitecture.com/wp-content/themes/Hastings/img/symbol-x.svg" alt=""></div>
    <iframe id="newsletter_iframe" src="<?php bloginfo('stylesheet_directory');?>/newsletter-submit.php" frameborder="0"></iframe>
</div>