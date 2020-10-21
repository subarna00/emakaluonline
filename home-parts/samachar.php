<div class="margin-top-small uk-padding-small ">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-expand">
            <div class="hh1 ">
            <div class="uk-flex uk-flex-between">
                    <h1 class="heading">समाचार</h1>
                
                <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-grid uk-child-width-1-3@m  uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-top"
                    uk-grid>
                    <?php 
                    $args = array('cat'=>'' , 'showposts'=>6);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
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
                </div>
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <?php get_template_part('home-parts/paryatan'); ?>
        </div>
    </div>
</div>