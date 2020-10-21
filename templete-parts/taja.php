<li>
             <?php 
                    $args = array('cat'=>'' , 'showposts'=>4);
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
                             <h3 class="uk-card-title mukhya-title"><?php echo wp_trim_words(get_the_title(),10,'..'); ?></h3>

                         </div>
                     </div>
                 </div>
             </a>
             <?php endwhile; wp_reset_postdata(); ?>
         </li>