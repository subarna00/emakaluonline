<div class="margin-top-small uk-padding-small ">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-expand">
            <div class="hh1 ">
            <div class="uk-flex uk-flex-between">
            <h1 class="heading">भिडियो</h1>

            <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
        </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-grid   uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-top"
                    uk-grid>
                    <div class="uk-width-expand">
                    <?php 
                    $args = array('cat'=>'' , 'showposts'=>1);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="video-embed">
                        <?php the_field('link');?>
                        <!-- <iframe width="853" height="480" src="<?php the_field('link');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

                            <h3 class=" card-title2"><?php echo wp_trim_words(get_the_title(),10,'..'); ?></h3>
                            <p class="artha-text"><?php echo wp_trim_words(get_the_excerpt(),50,'...');?></p>

                        </div>
                    </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="uk-width-1-3@m">
                        <div>
                        <ol class="uk-list uk-margin uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                            <?php 
                            $numbers=['1','2','3','4','5'];
                            $i=0;
                    $args = array('cat'=>'' ,'offset'=>1, 'showposts'=>5);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
                            <li class="list">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="uk-card uk-card-default uk-grid-collapse uk-grid uk-margin" uk-grid>
                                        <div class="uk-card-media-left uk-width-1-3 uk-cover-container">
                                            <div class="mukhya">
                                                <div class="number">
                                                    <?php echo $numbers[$i++];?>

                                                </div>
                                                <?php the_field('link');?>

                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-card-body card-body">
                                                <h3 class="uk-card-title mukhya-title">
                                                    <?php echo wp_trim_words(get_the_title(),10,'..'); ?></h3>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-4@m">
        <?php get_template_part('home-parts/jodinuhos'); ?>
        </div>
    </div>
</div>