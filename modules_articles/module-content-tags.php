<?php 

 $terms = get_the_terms($post->ID,  'article_tags');

        if( $terms ): ?>
            <ul class="project-tags">

                <?php foreach( $terms as $term ): ?>

                    <li class="tags"><a href="javascript:void(0)" onClick="searchPracticeBy('<?=$term->term_id?>','<?= $term->slug ?>')"><button class="tags-btn"><?= $term->name ?></button></a></li>

                <?php endforeach; ?>

            </ul>
<?php   endif; ?>