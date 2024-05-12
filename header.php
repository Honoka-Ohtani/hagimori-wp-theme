<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>

    <?php get_template_part('template_part/common/ogp'); ?>

    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
	<?php get_template_part('template_part/common/styles'); ?>

    <?php wp_head(); ?>
</head>

<body class="<?php is_page('about') ? 'bg-main-image bg-main-image_sp' : ''; ?>">
    <?php if(!is_front_page()): ?>
    <div id="cursor" class="cursor"></div>
    <header class="header" role="banner">
        <?php get_template_part('template_part/layouts/header'); ?>
    </header>
    <?php endif; ?>

    <?php get_template_part('template_part/parts/global-menu'); ?>

    <main id="main" class="main main--<?php echo strtolower(get_the_title()); ?>" role="main">
