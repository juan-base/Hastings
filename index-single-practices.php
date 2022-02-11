<div id="one" class="main_column">
   <div class="main_content" id="single_practices">
   <?php
      //print "<pre>";print_r($post);print "</pre>";
      if (isset($post) && isset($post->post_type) && ($post->post_type=="practice" || $post->post_type=="bio")) {
        //print "Get it boy";
        include "single-".$post->post_type."-page.php";
				?>
				<script id="loadNxt">
					$(function() {
						loadNextPractice(<?=$post->ID?>);
					});
				</script>
				<?php
      }
      
   ?>

   </div>
</div>
