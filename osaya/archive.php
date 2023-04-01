<?php
get_header();
?>

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


                <?php
                comments_template();
                ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();

?>