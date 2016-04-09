<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class()?>>
    <div id="root">
        <div id="nav-search">
            <div id="nav">
                <?php wp_nav_menu(array('menu' => 'Header Navigation' , 'container_class' => 'menu-header', 'theme_location' => 'main', 'depth' => 1)); ?>
            </div>
            <div id="search">
		<?php get_search_form() ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    <div id="main">
        <div id="header">
    		<div class="search">
    		</div>
    		<h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
            <div class="description"><?php bloginfo('description'); ?></div>
        </div>

