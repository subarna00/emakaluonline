<?php $items=wp_get_menu_array('main-menu');?>
<div uk-sticky>
<nav class="uk-navbar-container uk-margin-remove-top uk-sticky nav "  uk-navbar>
    <div class="uk-container-large uk-align-center  uk-flex uk-sticky uk-margin-remove-bottom mobile-nav">
        <div class="uk-navbar-left ">
            <button class="uk-button uk-button-default uk-margin-small-right uk-border-remove border" type="button"
                uk-toggle="target: #offcanvas-reveal"><img
                    src="<?php echo get_stylesheet_directory_uri();?>/img/slider.png" alt="Logo"></button>
            <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                <div class="uk-offcanvas-bar nav  uk-padding-remove">
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <div class="uk-margin-large">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div>
                    <ul class="uk-nav ">
                        <?php foreach($items as $item):?>
                        <li class="">
                            <a class=" side-list" href="<?php echo $item['url'];?>"><?php echo $item['title'];?>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    </div>
                </div>
            </div>
            <ul class="uk-navbar-nav uk-visible@m  nav-items">
                <?php foreach($items as $item):?>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php echo $item['url'];?>"><?php echo $item['title'];?>
                        <?php if($item['children']):?>
                        <a data-toggle="dropdown"><i style="font-size:24px" class="fa">&#xf0d7;</i></a>
                        <div class="dropdown-menu">
                            <?php foreach($item['children'] as $sitem):?>
                            <a class="dropdown-item"
                                href="<?php echo $sitem['url'];?>"><?php echo $sitem['title'];?></a>
                            <?php endforeach;?>
                        </div>
                        <?php endif;?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>

        </div>
        <div class="uk-navbar-right  uk-margin-small-left">
            <form action="#">
                <input class="uk-input uk-form-width-small" name="s" type="text" placeholder="यहाँ खोज्नुहोस .." value="/<?php the_search_query(); ?>">
                <button class="uk-button uk-button-default search"><i class="fas fa-search"></i></button>
            </form>

        </div>

    </div>
</nav>
</div>
<section class="uk-container-medium  div-color">
<div class="  ">
    <div class="uk-padding-small  ">
        <?php dynamic_sidebar('below-nav'); ?>
    </div>
</div>