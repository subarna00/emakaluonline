<div class="uk-margin-small-top uk-padding-small ">
    <div class="uk-grid-small  " uk-grid>
        <div class="uk-width-1-2@m ">
            <div uk-slideshow="animation: push">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slideshow-items uk-height-large ">
                        <?php 
                    $args = array('cat'=>'' , 'showposts'=>5);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <li>
                                <div>

                                    <div class="uk-inline">
                                        <div class="slide-img">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="uk-overlay-our uk-position-cover uk-height-large"></div>
                                        <div class="uk-overlay uk-position-bottom uk-light slide-title">
                                            <h2 class="h2-class"><?php the_title(); ?></h2>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </a>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                        uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slideshow-item="next"></a>

                </div>

                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>

        </div>
        <div class="uk-width-1-3@m">
            <div class="side-add1">
                <?php get_template_part('templete-parts/mukhyas'); ?>
            </div>
        </div>
        <div class="uk-width-1-6@m">
            <?php get_template_part('templete-parts/side-add'); ?>
        </div>
    </div>
</div>