<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
</head>
<body>
    <?php the_custom_logo($blog_id); ?>  
    <h1><?php the_field('main_title'); ?></h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Vero, aut. Quia eius quo dicta. Ut fugiat aspernatur ea esse fuga vitae cupiditate tenetur quidem. 
        Illo maxime porro nam assumenda fugiat.</p>
    <img src="<?php echo bloginfo('template_url');?>/assets/img/kingroom.png" alt="kingroom">
    <?php wp_footer(); ?>
</body>

</html>