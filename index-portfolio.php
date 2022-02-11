    <div id="three" class="main_column">
       <div class="main_content">
          <div id="portfolio-thumbs">
             <div id="portfolio-list" class="col-lg-12">
                <?php
                  $portfolios = array(
                    "sticky" => array(),
                    "project" => array(),
                    "oculto" => array(),
                  );
                  $all_portfolios = new WP_Query(array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'has_password' => false,
                    'posts_per_page' => -1
                  ));
									$random = get_field('sort_portfolio_randomly', 'option');
									$cnt = 0;
                  foreach ($all_portfolios->posts as $portfolio) {
                    $featured = get_field("featured", $portfolio->ID);
                    $title = get_field("title", $portfolio->ID);
                    $size_priority = get_field("size_priority", $portfolio->ID);
                    $size_priority = !empty($size_priority) ? $size_priority : "single";
										//$size_priority = !$isMobile ? $size_priority : "single";
                    $thumbnail = get_field($size_priority."_thumbnail", $portfolio->ID);
                    if (!$thumbnail) {
                      $thumbnail = array(
                        "url"=>$size_priority=="single"?"http://via.placeholder.com/480x550?text=Single":"http://via.placeholder.com/960x550?text=Double",
                        "alt"=>"Image Holder"
                      );
                    } else {
											$thumb_size = $isMobile ? "mobile_poster" : "desktop_" . $size_priority;
											$thumbnail["url"] = isset($thumbnail["sizes"]) && isset($thumbnail["sizes"][$thumb_size]) ? $thumbnail["sizes"][$thumb_size] : $thumbnail["url"];
										}
                    $terms = get_the_terms($portfolio->ID,  'project_tags');
                    $tags = array();
                    foreach ($terms as $term) { 
                      $tags[] = $term->slug;
                    }
                    $sticky = get_field("sticky", $portfolio->ID);

										$thumbnail_single = array("url"=>"");
										if (!$isMobile && $size_priority == "double") {
											$thumbnail_single = get_field("single_thumbnail", $portfolio->ID);
											$thumbnail_single["url"] = isset($thumbnail_single["sizes"]) && isset($thumbnail_single["sizes"]["desktop_single"]) ? $thumbnail_single["sizes"]["desktop_single"] : $thumbnail_single["url"];
										}

                    ob_start();
                    ?>
                    <div class="portfolio-box portfolio-<?=$size_priority?> <?=$sticky?"sticky":""?> <?=$featured?"featured":"not-featured"?>" rel="<?=implode(" ",$tags)?>" data-objId="<?=$portfolio->ID?>" data-published="<?=$portfolio->post_date?>" data-cnt="<?=++$cnt?>">
                       <div class="portfolio-list-thumb">
                          <img data-src="<?=$thumbnail["url"]?>" alt="<?=$thumbnail["alt"]?>" class="lazyload thumb-ori thumb-<?=$size_priority?>">
													<?php if (!empty($thumbnail_single["url"])) { ?>
													<img data-src="http://via.placeholder.com/960x550?text=." class="lazyload thumb-alt thumb-single" style="display:none">
													<?php } ?>
                          <div class="overlay">
                             <div class="text"><?=!empty($title) ? $title : $portfolio->post_title?></div>
                          </div>
                       </div>
                    </div>
                    <?php

										if ($random) {
												$type = "project";
										} else {
												//$type = $featured ? ($sticky?"sticky":"project") : "oculto";
												$type = $sticky?"sticky":"project";
										}

                    $portfolios[$type][] = ob_get_clean();
                  }

									if ($random) {
										shuffle($portfolios[$type]);
									}

                  foreach ($portfolios as $type => $portfolio_items) {
                    if ($type != "oculto") {
                      print implode("",$portfolio_items);
                    }
                  }
                ?>
             </div>
          </div>
          <div id="section-thumbnails"></div>
       </div>
    </div>