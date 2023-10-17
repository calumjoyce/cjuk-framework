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

    <header class="bg-white w-full relative top-0 py-6 transition-all">
        <div class="module-container">
			<div class="flex items-center justify-between">
				<div class="w-4/12">
					<h2 class="text-3xl font-bold">Calum Joyce.</h2>
				</div>
				<div class="w-8/12">
					<div class="flex items-center justify-end gap-8">
						<div class="main-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</div>
						<div class="flex items-stretch gap-8">
							<a href="/" role="button" class="btn bg-black">Get in touch</a>
							<button class="h-auto w-12 border-solid border-2 border-black rounded-xl hover:shadow-[0_0_0_2px] hover:shadow-salix transition-all "><span class="relative top-[-3px]">...</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">