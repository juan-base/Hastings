<?php 
get_header(); 
if ($isMobile) {
	include "home-page-mobile.php";
} else {
	include "home-page.php";
}
get_footer();