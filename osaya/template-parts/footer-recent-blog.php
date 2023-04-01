<?php
$args = array(
    'post_type' => 'post',

    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => 3 // this will retrive all the post that is published 
);

$result = new WP_Query($args);
if ($result->have_posts()) :
    while ($result->have_posts()) : $result->the_post();

?>
        <li><a href="<?php the_permalink(); ?>" class="hoverJS"><img class="footerImg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Recent Blog"></a></li>
<?php
    endwhile;
endif;
wp_reset_postdata();

?>