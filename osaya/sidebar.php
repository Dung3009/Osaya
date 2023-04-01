<div id="sidebar">
    <div class="sidebar-a sidebar-a1">
        <h3 class="border-title">商品タグ</h3>
        <ul class="tag-list">
            <?php

            $tags = get_tags();
            if ($tags) :
                foreach ($tags as $tag) : ?>
                    <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a></li>
                <?php endforeach; ?>
            <?php endif;
            ?>



        </ul>
    </div>
    <div class="sidebar-a sidebar-a2">
        <h3 class="border-title">商品カテゴリー</h3>
        <ul class="sidebar-list">
            <li> <?php wp_list_categories('title_li=&style=li'); ?></li>


        </ul>
    </div>
    <div class="sidebar-a sidebar-a3">
        <h3 class="border-title">最近の投稿</h3>
        <ul class="sidebar-list">
            <?php

            $args = array(


                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                while ($result->have_posts()) : $result->the_post();
            ?>

                    <li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></li>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();


            ?>


        </ul>
    </div>
    <div class="sidebar-a sidebar-a4">
        <h3 class="border-title">最近のコメント</h3>
        <ul class="sidebar-list">
            <li><a href="#">コメント</a></li>
            <li><a href="#">コメント</a></li>
            <li><a href="#">コメント</a></li>
            <li><a href="#">コメント</a></li>
            <li><a href="#">コメント</a></li>
        </ul>
    </div>
    <div class="sidebar-a sidebar-a5">
        <h3 class="border-title">アーカイブ</h3>
        <ul class="sidebar-list">
            <li><a href="#">2019年2月</a></li>
        </ul>
    </div>
    <div class="sidebar-a sidebar-a6">
        <h3 class="border-title">カテゴリー</h3>
        <ul class="sidebar-list">
            <li><a href="#">カテゴリー</a></li>
            <li><a href="#">カテゴリー</a></li>
            <li><a href="#">カテゴリー</a></li>
            <li><a href="#">カテゴリー</a></li>
        </ul>
    </div>
</div>

<!-- #sidebar -->