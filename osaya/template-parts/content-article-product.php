<div id="pageTitle">
    <div class="inner">
        <h2 class="pageTitleText futo"> Categorie  </h2>
    </div>
</div>

<div class="area1">
    <div class="inner">
        

        <?php woocommerce_breadcrumb();?>
        <div class="show">
            <div class="left">
                <p class="avata_pro">
                    <img src="<?php

                                the_post_thumbnail_url();
                                ?>" alt="">
                </p>
            </div>
            <div class="right">
                <h3 class="area_title"> <?php echo  get_post_meta($post->ID, 'name', true); ?> </span></h3>
                <p class="price"> Giá <?php echo  get_post_meta($post->ID, 'price', true); ?></p>
                <p class="introduce"> Mô tả sản phẩm <?php echo get_post_meta($post->ID, 'description', true);  ?></p>
                <p class="amount"> <?php echo  get_post_meta($post->ID, 'stock', true); ?> </p>
                <?php $product = wc_get_product();
                $id = $product->get_id(); ?>
                <div class="btn clearfix"  >
                    <p class="add hoverJS"><a href="?add-to-cart=<?php echo $id; ?>"><span>カートに入れる</span></a></p>
                </div>
                <p class="product_tag">商品コード: <?php echo  get_post_meta($post->ID, 'code', true); ?><br>商品カテゴリー: おすすめ, top, 毛糸<br>商品タグ: 商品タグ,商品タグ,商品タグ,商品タグ,商品タグ,商品タグ</p>
            </div>
        </div><!-- show -->
        <ul class="description">
            <li class="first active"><a data-tab="#tab1" href="javascript:void(0)" class="active">説明</a></li>
            <li class="two"><a data-tab="#tab2" href="javascript:void(0)">レビュー（0）</a></li>
        </ul>
        <div class="tab active" id="tab1">
            <p class="descrip_label">説明</p>
            <p class="text">ハマナカ　ボニー</p>
            <p class="number">00000-00-0-00</p>
            <p class="describe"><?php echo get_post_meta($post->ID, 'description', true);  ?>
            <ul class="social_network">
                <li><a href="#"><img src="img/blog_detail/face_icon.png" alt=""></a></li>
                <li><a href="#"><img src="img/blog_detail/line_icon.png" alt=""></a></li>
                <li><a href="#"><img src="img/blog_detail/titow_icon.png" alt=""></a></li>
                <li><a href="#"><img src="img/blog_detail/gmail_icon.png" alt=""></a></li>
                <li><a href="#"><img src="img/blog_detail/mail_box.png" alt=""> メールで友達に教える</a></li>
            </ul>
        </div>
        <div class="tab" id="tab2">
            <p class="descrip_label">説明</p>
            <p class="text"> <?php echo  get_post_meta($post->ID, 'name', true); ?></p>
            <p class="number"><?php echo  get_post_meta($post->ID, 'code', true); ?></p>
            <p class="describe"><?php echo get_post_meta($post->ID, 'description', true);  ?> </p>
            <ul class="social_network">
                <li><a href="#"><img src="img/blog_detail/face_icon.png" alt=""></a></li>
                <li><a href="#"><img src="img/blog_detail/line_icon.png" alt=""></a> >
                <li><a href="#"><img src="img/blog_detail/titow_icon.png" alt=""></a></li>
                <li><a href="#"><img src="img/blog_detail/gmail_icon.png" alt=""></a></li>
                <li><a href="#"><img src="img/blog_detail/mail_box.png" alt=""> メールで友達に教える</a></li>
            </ul>
        </div>
    </div><!-- inner -->
</div><!-- area1 -->
<div class="area2">
    <div class="inner">
        <div class="area2_title">関連商品</div>
        <ul class="list_product">
            <?php

            define( "id", get_the_ID(  ));
           

            $args = array(
                'post_type' => 'product',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => 3 // this will retrive all the post that is published 
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) : ?>
                <?php while ($result->have_posts()) : $result->the_post(); ?>
                    <?php
                    $post_id = get_the_ID();
                    
                   
                    if ($post_id != id ) : ?>
                    <li>
                        <p class="image_pro hoverJS"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(  );  ?>" alt=""></a></p>
                        <div class="box_image">
                            <p class="info_pro"><?php the_title();  ?></p>
                            <div class="box_info">
                                <p class="info"><?php echo get_post_meta($post->ID, 'description', true);  ?></p>
                                <p class="price"><?php echo get_post_meta($post->ID, 'price', true);  ?>円（税込）</p>
                            </div>
                        </div>
                    </li>
                    <?php  endif; ?>

                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>



        </ul>
    </div>
</div><!-- area2 -->



<?php

$user_id = get_current_user_id(  );
$args = array(
    'customer_id' => $user_id,
    'limit' => -1, // to retrieve _all_ orders by this user
);
$orders = wc_get_orders($args);

echo "<pre>";

print_r($orders);

echo "</pre>";
?>