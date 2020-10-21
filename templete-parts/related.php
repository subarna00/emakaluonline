<div class="hh1 ">
        <div class="uk-flex uk-flex-between">
            <h1 class="heading">सम्बन्धित समाचार</h1>

        </div>
    </div>
<div class="uk-grid uk-child-width-1-4@m  uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-top"
                    uk-grid>
<?php $i=0; $id=get_the_ID();
 $allcat = wp_get_post_categories($id);
  $categoryarr = array_diff($allcat,array(2));
   $args = array('showposts' => 6, 'cat'=>implode(',',$categoryarr),'post__not_in'=>array($id));
   $loop = new WP_Query( $args );
   while($loop->have_posts()): $loop->the_post(); ?>
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


<?php endwhile; wp_reset_postdata();?>
</div>