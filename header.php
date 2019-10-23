<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title><?php show_title(); ?></title>
    <meta name="description" content="<?php show_meta('description'); ?>" />
    <meta name="keywords" content="<?php show_meta('keywords'); ?>" />
    <meta name="author" content="skypyb">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/iconfont.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.min.css" rel="stylesheet">
    <?php $options = get_option('p_options'); ?>
    <link href="<?php bloginfo('template_url'); ?>/css/highlight/<?php echo $options['highlight']; ?>" rel="stylesheet">

    <!--Font-Awesome CDN-->
    <script src="https://use.fontawesome.com/25b2a5978b.js"></script>

    <?php echo "<style>".$options['css']."</style>"; ?>
    <?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
    <header>
        <nav class="menu-container">
            <div class="spread"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
            <?php  wp_nav_menu(array('depth'=>1,'container'=>'div','container_class'=>'menu')); ?>
        </nav>
        <hgroup class="banner">
            <h1 class="blog-name"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
            <p class="blog-description"><?php bloginfo('description'); ?></p>
        </hgroup>
    </header>