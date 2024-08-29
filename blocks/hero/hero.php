<div class="bg-black text-white relative mb-1">

	<?php acf_image( get_field( 'image' ), 'medium_large', [ 'class' => 'absolute top-0 right-0 bottom-0 left-0 w-full h-full object-cover z-0' ] ); ?>

	<div class="container py-10 relative z-10">

		<div class="absolute right-[5rem] top-[3rem] -z-10">
			<div class="absolute w-[100px] h-auto right-[1rem] top-[1rem] -rotate-90 [&_path]:fill-orange">
				<?php echo file_get_contents( get_stylesheet_directory() . '/assets/images/wedge.svg' ); ?>
			</div>
			<div class="absolute w-[50px] h-auto right-[6px] top-[6px] -rotate-90 [&_path]:fill-[#104597]">
				<?php echo file_get_contents( get_stylesheet_directory() . '/assets/images/wedge.svg' ); ?>
			</div>
		
		</div>

		<div class="md:max-w-[75%] md:max-w-[50%] bg-black bg-opacity-30 px-10 py-5 border-l-2 border-l-blue-500">
			<h1>
				<span class="block text-white"><?php echo get_field( 'heading_line_1' ); ?></span>
				<span class="block text-yellow uppercase"><?php echo get_field( 'heading_line_2' ); ?></span>
				<span class="block text-white"><?php echo get_field( 'heading_line_3' ); ?></span>
			</h1>

			<p><?php echo get_field( 'content' ); ?></p>

			<?php acf_link( get_field( 'link' ), 'btn mt-8 text-shadow' ); ?>

		</div>
	
	</div>

</div>
