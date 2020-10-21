<?php get_header(); ?>
<div class="uk-grid uk-child-width-1-4@m  uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-top"
    uk-grid>
    <?php 
                   
                    while(have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>">

        <div class="uk-inline">
            <div class="makalu">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="uk-overlay-our uk-position-cover"></div>
            <div class="uk-overlay uk-position-bottom uk-light">
                <h2 class="grid"><?php echo wp_trim_words(get_the_title(),10,'..'); ?></h2>
            </div>
        </div>

    </a>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>