<?php

get_header();

?>

<div class="banner">
    <div class="inner">
        <img src="/osaya_test/wp-content/themes/osaya/assets/img/cafe-shop/banner.png" alt="" />
    </div>
</div>

<div id="content">
    <?php


    get_template_part('template-parts/cafeshop', 'music');
    ?>


    <?php
    get_template_part('template-parts/cafeshop', 'handmade');

    ?>
    <div class="area area3">
        <div class="inner">
            <div class="rowTop rowTop1">
                <h3 class="title">ギャラリー<span>Gallery</span></h3>
                <ul class="listImg">
                    <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/cafe-shop/banner1.png" alt=""></a></li>
                    <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/cafe-shop/banner2.png" alt=""></a></li>
                </ul>
            </div>
            <div class="rowTop rowTop2">
                <h3 class="title">その他<span>Other</span></h3>
                <ul class="listImg">
                    <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/cafe-shop/banner3.png" alt=""></a></li>
                    <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/cafe-shop/banner4.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>

</div><!-- #content -->

<?php

get_footer();
?>