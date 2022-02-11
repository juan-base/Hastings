<?php 
get_header(); 
if (identifyMobile()) {
	if ($isMobile) {
		include "home-page-mobile.php";
	} else {
		include "home-page.php";
	}
}
get_footer();
