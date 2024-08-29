<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	
	<header class="bg-black text-white">

		<nav class="container grid md:grid-cols-12 gap-4">
			
			<div class="md:col-span-2">
				<?php the_custom_logo(); ?>
			</div>

			<div class="md:col-span-10 md:flex md:justify-end md:items-center">
				<?php wp_nav_menu( [
					'fallback_cb' => false,
					'menu' => 'header',
					'menu_class' => 'flex flex-wrap md:flex-nowrap [&_li]:basis-[50%] md:[&_li]:basis-auto',
					'walker' => new Resilient_Computing_Walker(),
				] ); ?>
			</div>
		</nav>

	</header>
