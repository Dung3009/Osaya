<?php
get_header();


?>



<div id="slider">
    <div class="inner">
        <div class="bxslider">
            <ul class="slides">
                <li><img src="wp-content/themes/osaya/assets/img/index/slider1.png" alt="" /></li>
                <li><img src="wp-content/themes/osaya/assets/img/index/slider2.png" alt="" /></li>
                <li><img src="wp-content/themes/osaya/assets/img/index/slider3.png" alt="" /></li>
                <li><img src="wp-content/themes/osaya/assets/img/index/slider4.png" alt="" /></li>
                <li><img src="wp-content/themes/osaya/assets/img/index/slider5.png" alt="" /></li>
                <li><img src="wp-content/themes/osaya/assets/img/index/slider6.png" alt="" /></li>
            </ul>
        </div>
        <script type="text/javascript">
            $('.slides').bxSlider();
        </script>
    </div>
</div>
<!-- #slider -->

<div id="content">
    <div class="area area1">
        <div class="inner">
            <h3 class="title"><a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">イチオシ情報<span>News&Topics</span></a></h3>
            <div class="boxPost">

                <?php

                get_template_part('template-parts/homepage', 'news');

                ?>
            </div>
        </div>
    </div>
    <div class="area area2">
        <div class="inner">
            <h3 class="title"><a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>">お買い物<span>Shopping</span></a></h3>
            <div class="product-slider">
                <div class="product-bxslider">
                    <ul class="product-slides product-list">
                        <?php
                        get_template_part('template-parts/homepage', 'shopping');

                        ?>

                    </ul>

                </div>
            </div>

        </div>
    </div>


    <div class="area area3">
        <div class="inner">
            <h3 class="title">教室&イベント<span>School&Events</span></h3>
            <ul class="list clearfix">
                <li><a href="#"><img src="wp-content/themes/osaya/assets/img/index/area3-img.png" alt=""></a></li>
                <li><a href="#"><img src="wp-content/themes/osaya/assets/img/index/area3-img.png" alt=""></a></li>
                <li><a href="#"><img src="wp-content/themes/osaya/assets/img/index/area3-img.png" alt=""></a></li>
                <li><a href="#"><img src="wp-content/themes/osaya/assets/img/index/area3-img.png" alt=""></a></li>
            </ul>
        </div>
        <!-- inner -->
    </div>
    <!-- area3 -->
</div><!-- #content -->

<?php
get_footer();
?>