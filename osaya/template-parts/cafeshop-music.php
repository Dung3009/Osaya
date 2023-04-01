<div class="area area1">
    <div class="inner">
        <h3 class="title"><a href="#<?php  ?>">音楽&パフォーマンス<span>Music&performance</span></a></h3>
        <div class="boxPost">


            <?php

            $args = array(
                'category_name' => 'music',

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
                            <div class="text"><?php echo get_the_excerpt(); ?> <a href="<?php echo  get_the_permalink(); ?>">READ MORE</a> </div>
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



        </div>
        <!-- BOXPOST -->
    </div>
</div>
<!-- AREA1 -->