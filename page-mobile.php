<?php 
get_header(); 
/*
$post_type = get_post_type();
if ($post_type == "practice" || $post_type == "bio") {
	$divid = "single_practices";
} else {
	$divid = "single_portfolios";
}
?>
<div class="main_content" id="<?=$divid?>">
<?php
	include "single-{$post_type}-page.php";
?>
</div>
<?php 
*/

include "home-page-mobile.php";


get_footer(); 