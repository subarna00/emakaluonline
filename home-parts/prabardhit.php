<div class=" uk-padding-small  ">
    <div class="hh1">
    <div class="uk-flex uk-flex-between">
            <h1 class="heading">प्रबर्धित सामग्रीहरु</h1>

            <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
        </div>
    </div>
    <div class="uk-grid-match uk-child-width-1-4@m "
        uk-grid>
        <?php 
                    $args = array('cat'=>'' , 'showposts'=>4);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

        <div class="">
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