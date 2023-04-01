<?php
get_header();

?>




<?php
if (is_post_type_archive('product')) {
?>
    <div id="content">
        <div class="inner">
            <?php


            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'archive-product');
                }
            }

            ?>

        </div>
    </div>
<?php
} else {

?>
    <div id="pageTitle">
        <div class="inner">
            <h2 class="pageTitleText futo"> カテゴリー：お客様の声 </h2>
        </div>
    </div>
    <div id="content">

        <div class="inner clearfix">
            <h2 class="titleBig">和洋混成ユニット「うだつ」ライブ</h2>
            <div id="main-page">
                <div class="blog-wrapper">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }

                    ?>



                </div>
            </div>
        </div>
    </div>
<?php } ?>




<?php
get_footer();
?>