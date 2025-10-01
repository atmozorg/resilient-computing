<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="relative py-8 border-b-orange border-b-8 overflow-hidden">
		<img width="768" height="322" src="https://resilient.local/wp-content/uploads/2024/07/Resilient_Computing_Home_Main-768x322.jpg" class="darken absolute top-0 right-0 bottom-0 left-0 w-full h-full object-cover z-0 wp-post-image" alt="" decoding="async" srcset="https://resilient.local/wp-content/uploads/2024/07/Resilient_Computing_Home_Main-768x322.jpg 768w, https://resilient.local/wp-content/uploads/2024/07/Resilient_Computing_Home_Main-300x126.jpg 300w, https://resilient.local/wp-content/uploads/2024/07/Resilient_Computing_Home_Main-1024x429.jpg 1024w, https://resilient.local/wp-content/uploads/2024/07/Resilient_Computing_Home_Main-1536x644.jpg 1536w, https://resilient.local/wp-content/uploads/2024/07/Resilient_Computing_Home_Main-2048x858.jpg 2048w" sizes="(max-width: 768px) 100vw, 768px">
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