<?php
get_header();
?>

<div id="pageTitle">
    <div class="inner">
        <h2 class="pageTitleText futo"> <?php the_title(); ?> </h2>
    </div>
</div>

<div id="content">
    <div class="inner clearfix">
        <div id="main-page">
            <?php
            if (have_posts()) {

                the_content();
            }

            ?>

        </div>
    </div>
</div>






<?php
get_footer();
?>