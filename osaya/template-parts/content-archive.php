<div class="bog-item">
    <h3 class="border-title">
        <ul class="border-title-list">
            <li>BY <span> <?php the_author(); ?></span></li>
            <li><?php the_date(); ?></li>
            <li><a href="#"><?php comments_number(); ?></a></li>
            <li><a href="#">お客様の声</a></li>
        </ul>
    </h3>
    <div class="blog-text">
        <?php
        the_excerpt();
        ?></div>
    <p class="blog-link"><a href="  <?php the_permalink();?>  ">もっと読む</a></p>
</div>