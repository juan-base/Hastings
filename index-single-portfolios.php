<div id="four" class="main_column">
   <div class="main_content" id="single_portfolios">
   <?php
      //print "<pre>";print_r($post);print "</pre>";
      if (isset($post) && isset($post->post_type) && $post->post_type=="portfolio") {
        //print "Get it boy";
        include "single-portfolio-page.php";
				?>
				<script id="loadNxt">
					$(function() {
						loadNextPortfolio(<?=$post->ID?>);
					});
				</script>
				<?php
      }
      
   ?>

   </div>
</div>
