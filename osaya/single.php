<?php
get_header();
?>

<div id="content">
    <div class="inner clearfix">


        <div id="main-page">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'article-post');
                }
            }

            ?>
            <p class="author"> 投稿ナビゲーション </p>

            <ul class="pager">
                <li><a <?php echo previous_post_link() ?>>←前回の投稿のタイトル入ります</a></li>
                <li><a <?php echo next_post_link() ?>>次回の投稿のタイトル入ります→</a></li>
            </ul>
            <?php
            comments_template();
            ?>


        </div>
        <?php
        get_sidebar();
        ?>





    </div>


    <?php
    get_footer();

    ?>