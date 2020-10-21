<div class="margin-top-small uk-padding-small ">
    <div class="uk-grid uk-margin-small-top" uk-grid>
        <div class="uk-width-expand uk-margin-small-top">
            <div class="hh1 ">
                <div class="uk-flex uk-flex-between">
                <h1 class="heading">मनोरन्जन</h1>
                <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-grid uk-child-width-1-2@m  uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-top"
                    uk-grid>
                    <?php 
                    $args = array('cat'=>'' , 'showposts'=>1);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div>

                            <?php the_post_thumbnail(); ?>

                            <h3 class=" card-title2"><?php echo wp_trim_words(get_the_title(),10,'..'); ?></h3>
                            <p class="artha-text"><?php echo wp_trim_words(get_the_excerpt(),50,'...');?></p>

                        </div>
                    </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="uk-width-expand">
                        <div>
                        <ol class="uk-list uk-margin uk-padding-small uk-padding-remove-vertical uk-padding-remove-right">
                            <?php 
                            $numbers=['1','2','3','4','5'];
                            $i=0;
                    $args = array('cat'=>'' ,'offset'=>1, 'showposts'=>4);
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
                                                <?php the_post_thumbnail(); ?>
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
        <?php get_template_part('home-parts/sahitya'); ?>
        </div>
    </div>
</div>