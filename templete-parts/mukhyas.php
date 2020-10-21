 <div class=" uk-padding-left-small ">
     <div uk-switcher="animation: uk-animation-fade; toggle: > *"
         class=" switchbg uk-child-width-1-3 uk-grid uk-grid-medium ">

         <div class="switch">मुख्य​</div>

         <div class="switch">लोकप्रिय</div>

         <div class="switch">ताजा अपडेट</div>

     </div>

     <ul class="uk-switcher uk-margin">
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
            <?php get_template_part('templete-parts/lokpriya'); ?>
            <?php get_template_part('templete-parts/taja'); ?>
     </ul>
 </div>