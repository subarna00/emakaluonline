<?php 
                   
                   while(have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top card-img1">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="uk-card-body card-body1">
                <h3 class="uk-card-title card-title1"><?php echo wp_trim_words(get_the_title(),10,'..'); ?></h3>

            </div>
        </div>
    </div>
</a>
<?php endwhile; wp_reset_postdata(); ?>