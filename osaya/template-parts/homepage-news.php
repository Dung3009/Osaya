<?php
 $args = array(
    'category_name' => '編物教室',

    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => 4 // this will retrive all the post that is published 
);

$result = new WP_Query($args);
if ($result->have_posts()) :
    while ($result->have_posts()) : $result->the_post();

?>

        <div class="item">

            <p class="img"><a href="<?php the_permalink(); ?>" class="hoverJS"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></p>
            <div class="colRight">
                <p class="subTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <p class="cat">テーマ：<?php $cats = get_the_category_list(', ');
                                    echo $cats;     ?></p>
                <div class="text"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">READ MORE</a> </div>
                <div class="date">
                    <p class="boxDate">開催日</p>
                    <p class="numDate"><?php echo get_the_date('d/m'); ?></p>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
wp_reset_postdata();

?>

<!-- COLRIGHT -->