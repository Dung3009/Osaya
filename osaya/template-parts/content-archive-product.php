<li>
    <a class="hoverJS product-img" href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
    <div class="product-content">
        <h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php echo  get_post_meta($post->ID, 'name', true); ?></a></h2>
        <div class="product-info">
            <p class="product-info-l"><?php echo  get_post_meta($post->ID, 'description', true);   ?></p>
            <p class="product-price"><?php echo  get_post_meta($post->ID, 'price', true); ?>（税込）</p>
        </div>
    </div>
</li>