<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="uk-container">
        <div class="uk-grid uk-padding-small header  " uk-grid>

            <div class="uk-width-1-3@m uk-margin-remove">
                <?php the_custom_logo(); ?>
               <p class="date"> मंगलबार, आश्विन १३, २०७७</p> 
            </div>
            <div class="uk-width-expand uk-margin-remove ">
                <?php dynamic_sidebar('logo-right');?>
            </div>
        </div>
    </div>

    <?php get_template_part('nav'); ?>