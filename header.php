<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <title><?php echo !is_home() ? wp_title('-', true, 'right') : bloginfo('name'); ?></title>

    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
	<?php get_template_part('template_part/common/styles'); ?>

    <?php wp_head(); ?>
</head>

<body class="">
    <header class="header" role="banner">
        <?php get_template_part('template_part/layouts/header'); ?>
    </header>
    <main id="main" class="main" role="main">
