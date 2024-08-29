<div class="relative mt-12">

	<?php acf_image( get_field( 'image' ), 'medium_large', [ 'class' => 'absolute top-0 right-0 bottom-0 left-0 w-full h-full object-cover z-0' ] ); ?>

	<div class="container py-10 relative z-10">

		<div class="md:max-w-[70%] bg-black bg-opacity-30 px-10 py-12 py-5 border-l-2 border-l-blue-500 -mt-20">
			
			<h2 class="text-yellow uppercase mt-6"><?php echo get_field( 'heading' ); ?></h2>

			<div class="text-white mt-4">

				<?php echo get_field( 'content' ); ?>

			</div>

		</div>

		<div class="flex flex-col items-center mt-6">

			<?php foreach( get_field( 'links' ) as $link ) : ?>

				<?php acf_link( $link[ 'link' ], 'btn my-4' ); ?>

			<?php endforeach; ?>
		</div>
	
	</div>

</div>