	<div id="two" class="main_column">
       <div class="main_content">
          <section id="practice">

						 <?php 
							if (!$isMobile) {
								include "home-header.php";
						 }
						 ?>

             <div id="practice-thumbs">
                <div id="practice-list" class="clearfix">
                  <?php
                    $practices = array(
                      "sticky" => array(),
                      "article" => array(),
                      "job" => array(),
                      "bio" => array(),
                    );
                    $all_practices = new WP_Query(array(
                      'post_type' => array('practice','bio'),
                      'post_status' => 'publish',
                      'posts_per_page' => -1
                    ));
										$random = get_field('sort_practice_randomly', 'option');
										$cnt = 0;
                    foreach ($all_practices->posts as $practice) {
                      //print_r($practice);
                      $featured = get_field("featured", $practice->ID);
                      $title = get_the_title($practice->ID);
                      $type = get_field("type", $practice->ID);
                      $type = $type ? $type : $practice->post_type;
                      $intro = get_field("intro", $practice->ID);
                      $thumbnail = get_field("thumbnail", $practice->ID);
                      if (!$thumbnail) {
                        $thumbnail = array(
                          "url" => $type=="bio" ? "http://via.placeholder.com/355x270?text=".$type : "",
                          "alt" => $type=="bio" ? "Image Holder" : "",
                        );
                      }
                      $tags = array($type);
                      $terms = get_the_terms($practice->ID,  'article_tags');
                      foreach ($terms as $term) { 
                        $tags[] = $term->slug;
                      }
                      /*
                      $terms = get_the_terms($practice->ID,  'article_cats');
                      foreach ($terms as $term) { 
                        $tags[] = $term->slug;
                      }
                      */

                      $sticky = get_field("sticky", $practice->ID);

                      if ($type=="bio") {
                        $tags[] = $type;
                        $name = get_field('first_name', $practice->ID) . " " . get_field('last_name', $practice->ID);
                      }

                      array_unique($tags);

                      ob_start();
                      ?>
                      <div class="practice-box <?=$featured?"featured":"not-featured"?> <?=$sticky?"sticky":""?> <?=$type=="article"&&!empty($thumbnail["url"])?"with-img":""?>" data-tmpl="<?=$type?>" rel="<?=implode(" ",$tags)?>" data-objId="<?=$practice->ID?>" data-published="<?=$practice->post_date?>" data-cnt="<?=++$cnt?>">
                        <div class="practice-cell">
                           <div class="practiceThumbHoverLine top"></div>
                           <?php if (!empty($thumbnail["url"])) { ?>
                           <div class="practice-img-container">
                              <img src="<?=$thumbnail["url"]?>" alt="<?=$thumbnail["alt"]?>">
                           </div>
                           <?php } ?>
                           
                              <?php
                              ob_start();
                                if ($type=="bio" && !empty($name)) {
                                  print "<div class='bio-name'>$name</div>";
                                  print $hastings->get_bio_credentials($practice, true);
                                } else if ($type=="job" && !empty($title)) {
                                  print "<div class='practice_thumb_title'>$title</div>";
                                } else {
                                  if (empty($thumbnail["url"]) && !empty($title)) {
                                    print "<div class='practice_thumb_title'>$title</div>";
                                  }
                                }
                                if ($type!="bio" && !empty($intro) ) {
                                  print "<div class='practice_thumb_intro'>$intro</div>";
                                }
                              $desc = ob_get_clean();
                              if (!empty($desc)) {
                                ?>
                                <div class="practice-desc-container <?=empty($thumbnail["url"])?"minusFourToppadding":""?>">
                                  <?= $desc ?>
                                </div>
                                <?php
                              }
                              ?>
                           <div class="practiceThumbHoverLine bottom"></div>
                        </div>
                      </div>
                      <?php

											if ($random) {
													$practices["all"][] = ob_get_clean();
											} else {
													$practices[$sticky?"sticky":$type][] = ob_get_clean();
													//$practices[$type][] = ob_get_clean();
											}

                    }

										if ($random) {
											shuffle($practices["all"]);
										}

                    foreach ($practices as $type => $practice_items) {
                      if ($practice_items) {
                        print implode("",$practice_items);
                      }
                    }
                  ?>

                </div>
             </div>
          </section>
       </div>
    </div>