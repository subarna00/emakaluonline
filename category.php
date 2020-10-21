<?php get_header(); ?>
<div class="margin-top-small uk-padding-small ">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-expand">
            <div class="hh1 ">
            <div class="uk-flex uk-flex-between">
                    <h1 class="heading"><?php single_cat_title();?></h1>
                
                <!-- <h2 class="second">सबै <a href="" uk-icon="icon:table "></a> </h2> -->
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-grid uk-child-width-1-3@m  uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-top"
                    uk-grid>
                   <?php get_template_part('loop'); ?>
                </div>
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="side-add1">
                <?php dynamic_sidebar('side-add'); ?>
                </div>
        </div>
    </div>
    <div>
    <?php appharu_paging();?>   
</div>
<?php get_footer(); ?>