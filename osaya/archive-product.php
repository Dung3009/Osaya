<?php
get_header();
?>


<div id="content">


    <div class="inner">
        <div class="product-wrapper">
            <ul class="product-list">



                <?php

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type'      => 'product',

                    'posts_per_page'      => '3',
                    'paged'          => $paged
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        get_template_part('template-parts/content', 'archive-product');

                    endwhile;
                endif;


                ?>
            </ul>
            <?php wp_reset_query(); ?>



            <div class="pagination">
                <?php
                $links = paginate_links(array(
                    'prev_next'          => false,
                    'type'               => 'array'
                ));

                if ($links) :

                    echo '<ul class="paginate">';

                    // get_previous_posts_link will return a string or void if no link is set.
                    if ($prev_posts_link = get_previous_posts_link(__('◂'))) :
                        echo '<li class="prev">';
                        echo $prev_posts_link;
                        echo '</li>';
                    endif;

                    echo '<li >';
                    echo join('</li><li>', $links);
                    echo '</li>';

                    // get_next_posts_link will return a string or void if no link is set.
                    if ($next_posts_link = get_next_posts_link(__('▸'))) :
                        echo '<li class="next">';
                        echo $next_posts_link;
                        echo '</li>';
                    endif;
                    echo '</ul>';
                endif;


                ?>
            </div>











        </div>



    </div>


    <?php
    get_footer();

    ?>