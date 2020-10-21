<div class="margin-top-small uk-padding-small uk-padding-remove-bottom ">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-expand">
            <div class="hh1 ">
            <div class="uk-flex uk-flex-between">
            <h1 class="heading">कभर समाचार</h1>

            <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
        </div>
            </div>
            <div class="uk-width-expand">
                <div class="   ">
                    <!-- <?php 
                    $args = array('cat'=>'' , 'showposts'=>1);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="uk-card uk-card-default  uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-cover-container bbb">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title card-title2"><?php the_title(); ?></h3>
                                    <p class="artha-text"><?php echo wp_trim_words(get_the_excerpt(),40,'...');?></p>
                                </div>
                            </div>
                        </div>

                    </a>
                    <?php endwhile; wp_reset_postdata(); ?> -->


                    <div uk-slider="center: true">

                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                            <ul class="uk-slider-items uk-child-width-1-1  uk-grid">
                                <?php 
                    $args = array('cat'=>'' , 'showposts'=>3);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="uk-card uk-card-default  uk-child-width-1-2@s uk-margin" uk-grid>
                                            <div class="uk-card-media-left uk-cover-container bbb">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div>
                                                <div class="uk-card-body">
                                                    <h3 class="uk-card-title card-title2"><?php the_title(); ?></h3>
                                                    <p class="artha-text">
                                                        <?php echo wp_trim_words(get_the_excerpt(),40,'...');?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                                uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                                uk-slidenav-next uk-slider-item="next"></a>

                        </div>

                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <?php get_template_part('home-parts/dharma-darsan'); ?>
        </div>
    </div>
</div>