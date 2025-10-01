<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="relative py-8 border-b-orange border-b-8 overflow-hidden">
		<?php acf_image( get_field( 'header_image' ), 'full', [ 'class' => 'darken absolute top-0 right-0 bottom-0 left-0 w-full h-full object-cover z-0 wp-post-image' ] ); ?>
		<div class="relative z-10 container">
			<h1 class="text-shadow"><?php the_title(); ?></h1>
			<div class="text-white"><?php echo get_field( 'content' ); ?></div>
		</div>
	</div>

	<main class="container py-8">

		<?php the_content(); ?>

	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>