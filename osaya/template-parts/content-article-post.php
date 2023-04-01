<h2 class="titleBig"> <?php the_title(); ?> </h2>

<div class="blog-wrapper">
    <div class="bog-item">
        <h3 class="border-title">
            <ul class="border-title-list">
                <li>BY <span> <?php the_author(); ?> </span></li>
                <li> <?php the_date(); ?></li>
                <li><a href="#"><?php comments_number(); ?></a></li>
                <li><a href="#">音楽</a></li>
            </ul>
        </h3>
        <ul class="social_network">
            <li><a href="#"><img src="img/blog_detail/face_icon.png" alt=""></a></li>
            <li><a href="#"><img src="img/blog_detail/line_icon.png" alt=""></a></li>
            <li><a href="#"><img src="img/blog_detail/titow_icon.png" alt=""></a></li>
            <li><a href="#"><img src="img/blog_detail/gmail_icon.png" alt=""></a></li>
            <li><a href="#"><img src="img/blog_detail/mail_box.png" alt=""> メールで友達に教える</a></li>
        </ul>
        <div class="img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
        <div class="blog-text">
            <?php the_content(); ?>
        </div>


    </div>
</div>





<!-- #main-page -->