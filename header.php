<!doctype html>
<html <?php language_attributes(); ?> class="selection:bg-black selection:text-white">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
	</a>

    <header class="bg-slate-200 w-full fixed top-0">
        Header
		<a href="#?" class="btn">Button</a>
    </header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">