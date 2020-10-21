<div class="hh1 ">
<div class="uk-flex uk-flex-between">
            <h1 class="heading">रोचक खबर</h1>

            <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2>
        </div>
</div>
<div>
    <?php 
                    $args = array('cat'=>'' , 'showposts'=>1);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>

        <h2 class="four"><?php echo wp_trim_words(get_the_title(),10,'..'); ?></h2>

        <?php endwhile; wp_reset_postdata(); ?>

</div>
<ul class="uk-list uk-margin">
    <li>
        <?php 
                    $args = array('cat'=>'' ,'offset'=>1, 'showposts'=>4);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="uk-card uk-card-default uk-grid-collapse uk-grid uk-margin" uk-grid>
                <div class="uk-card-media-left uk-width-1-3 uk-cover-container">
                    <div class="mukhya">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card-body card-body">
                        <h3 class="uk-card-title mukhya-title"><?php echo wp_trim_words(get_the_title(),10,'..'); ?>
                        </h3>

                    </div>
                </div>
            </div>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
    </li>
</ul>