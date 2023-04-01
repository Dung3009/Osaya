
                        <?php 
                            
                            $args = array(
                                'post_type' => 'product',
                                
                                
                                'post_status' => 'publish',
                                'order'    => 'DESC',
                                'posts_per_page' => -1 // this will retrive all the post that is published 
                            );
                            $result = new WP_Query($args);
                            if ($result-> have_posts()) : 
                                while ($result->have_posts()) : $result->the_post();
                            ?>
                            <li>
                            
                                <a class="hoverJS product-img" href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="300" height="300" /></a>  </a>
                                <div class="product-content">
                                    <h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'name', true  ) ;?></a></h2>
                                    <div class="product-info">
                                        <p class="product-info-l"><?php echo get_post_meta($post->ID, 'description', true  ); ?></p>
                                        <p class="product-price"><?php echo get_post_meta($post->ID, 'price', true  ); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                                
                                
                        ?>
                        
                    <script type="text/javascript">
                        
                        if($(window).width() < 769){
                            $('.product-slides').bxSlider({
                                slideMargin: 10,
                                auto: true,
                                pager: false,
                                maxSlides: 1,
                                minSlides: 1,
                                moveSlides: 1,
                                slideWidth: 220
                            });
                        }
                        else{
                            if($(window).width() > 769){
                                $('.product-slides').bxSlider({
                                    slideMargin: 20,
                                    auto: true,
                                    pager: false,
                                    maxSlides: 3,
                                    minSlides: 3,
                                    moveSlides: 1,
                                    slideWidth: 345
                                });
                            }
                        }
                    </script>
                