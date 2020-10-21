<?php get_header(); ?>
<div class="margin-top-small uk-padding-small ">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-expand">
            <div>

                <?php
                   while(have_posts()) : the_post(); ?>
                <h1> <?php the_title(); ?></h1>
                <div class="simgle-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <p class="single-content"> <?php  the_content(); ?> </p>

                <?php endwhile; wp_reset_postdata(); ?>

            </div>
            <div>
                <?php get_template_part('templete-parts/comment'); ?>
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="side-add1">
                <?php dynamic_sidebar('side-add'); ?>
            </div>
        </div>
    </div>
    <div>
        <?php get_template_part('templete-parts/related'); ?>
        <?php appharu_paging();?>
    </div>
</div>
<?php get_footer(); ?>