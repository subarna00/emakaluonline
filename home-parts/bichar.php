<div class=" uk-padding-small uk-padding-remove-top">
    <div class="hh1">
    <div class="uk-flex uk-flex-between">
            <h1 class="heading">ब्लग/विचार</h1>

            <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
        </div>
    </div>
    <div class="uk-grid-match uk-child-width-1-4@m uk-margin-small-top "
        uk-grid>
        <?php 
                    $args = array('cat'=>'' , 'showposts'=>4);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
        <a href="<?php the_permalink(); ?>">

            <div class="uk-margin-small-top">
                <div class="bichar">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="">
                    <h2 class="grid grid1"><?php echo wp_trim_words(get_the_title(),2,'..'); ?></h2>
                </div>
            </div>

        </a>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>