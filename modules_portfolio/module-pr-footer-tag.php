 <?php 

 $terms = get_the_terms($post->ID,  'project_tags');


if( $terms ): ?>
    <tr>
        <td class="table-content" colspan="2">
            <ul class="project-tags">

                <?php foreach( $terms as $term ): //print_r($term); ?>

                    <li class="tags"><a href="javascript:void(0)" onClick="searchPortfolioBy('<?=$term->term_id?>','<?= $term->slug ?>')"><button class="tags-btn"><?= $term->name ?></button></a></li>

                <?php endforeach; ?>

            </ul>
        </td>
	</tr>

<?php endif; ?>

