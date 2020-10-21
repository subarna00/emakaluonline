<div class=" uk-padding-small uk-padding-remove-top">    
    <div class="hh1 ">
    <div class="uk-flex uk-flex-between">
            <h1 class="heading">खेलकुद</h1>

            <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
        </div>
    </div>
    <div class="uk-grid uk-child-width-1-4@m  uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-top" uk-grid>
        <?php 
                    $args = array('cat'=>'' , 'showposts'=>4);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
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
</div>