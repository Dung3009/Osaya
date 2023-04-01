<div id="footer" class="clearfix resetStyle">
    <div class="inner">
        <div class="wrapftCol clearfix">
            <div class="ftCol ftInfo">
                <div class="ftBox">
                    <h2 class="ftTitle gill-san">Contact Us</h2>
                    <p class="tel"><a href="tel:090-3562-0479">090-3562-0479</a></p>
                    <p class="mail"><a href="mailto:">お問い合わせ</a></p>
                </div>
                <div class="ftBox">
                    <h2 class="ftTitle gill-san">Social</h2>
                    <ul class="sns">
                        <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/common/sns_fb_icon.png" alt=""></a></li>
                        <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/common/sns_instargram_icon.png" alt=""></a></li>
                        <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/common/sns_twitter_icon.png" alt=""></a></li>
                        <li><a href="#" class="hoverJS"><img src="/osaya_test/wp-content/themes/osaya/assets/img/common/sns_line_icon.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <!-- ftInfo -->
            <div class="ftCol ftRecBlog">
                <h2 class="ftTitle gill-san">Recent Blog</h2>
                <ul class="listImg">
                    <?php
                        get_template_part( 'template-parts/footer', 'recent-blog' );
                    ?>

                </ul>
            </div>
            <!-- ftRecBlog -->
            <div class="ftCol ftCafeSapce">
                <h2 class="ftTitle gill-san">Cafe space</h2>
                <p class="ftBoxBanner"><a href="<?php echo get_page_link(96);  ?>"><img src="/osaya_test/wp-content/themes/osaya/assets/img/common/ft_cafespace_photo.jpg" alt="Cafe space"></a></p>
            </div>
            <!-- ftCafeSapce -->
            <div class="ftCol ftTags">
                <h2 class="ftTitle gill-san">Tag</h2>
                <ul class="listTag">
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
            <!-- ftTags -->
        </div>
        <div class="copyright clearfix">

            <p id="copyright">© 2019 OSAYA ITOTEN. ALL RIGHTS RESERVED.</p>
            <?php

            wp_nav_menu(
                array(
                    'menu' => 'footer',
                    'menu_class' => 'menuFt pc',


                )
            );
            ?>
        </div>
    </div><!-- .inner -->
</div><!-- #footer -->

<?php
wp_footer();
?>
</body>




</html>