<div class="bg-blue text-white my-1">

	<div class="container py-10">

		<h2 class="text-center"><?php echo get_field( 'heading' ); ?></h2>

		<div class="grid mt-10">

		<?php foreach( get_field( 'items' ) as $key => $item ) : ?>

			<div class="relative md:grid md:grid-cols-12 gap-4">

				<div class="dot hidden md:block absolute bg-blue w-[30px] h-[30px] border-[1rem] border-orange rounded-full top-[5rem] left-[50%] translate-x-[-50%] z-10 transition-all duration-500">
					<img class="<?php echo $key === 0 ? 'hidden' : 'hidden'; ?> absolute top-[-50px] left-[-50px] rotate-180" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wedge.svg">
				</div>

				<div class="<?php if( 0 === $key ) echo 'first '; ?>timeline md:col-span-6 md:pr-[100px]">

					<?php if( ! empty( $item[ 'year' ] ) ) : ?>
						<div class="mt-8 text-[4rem] md:text-[6rem] font-bold year"><?php echo $item[ 'year' ]; ?></div>
					<?php endif; ?>
					
					<?php if( ! empty( $item[ 'heading' ] ) ) : ?>
						<h3 class="!text-yellow uppercase <?php if( ! empty( $item[ 'year' ] ) ) echo 'mt-0 md:-mt-4'; ?>"><?php echo $item[ 'heading' ]; ?></h3>
					<?php endif; ?>
						
					<?php if( ! empty( $item[ 'content' ] ) ) : ?>
						<div class="[&_h3]:mt-0 [&_h3]:text-white [&_h3]:font-normal [&_h3]:mb-2"><?php echo $item[ 'content' ]; ?></div>
					<?php endif; ?>
					
				</div>
				
				<div class="md:col-span-6 grid grid-cols-2 gap-4 md:pl-[100px] p-4">

					<?php foreach( $item[ 'images' ] ?: [] as $image ) : ?>

						<?php acf_image( $image[ 'image' ], 'medium', [ 'class' => 'self-center' ] ); ?>

					<?php endforeach; ?>

				</div>
			
			</div>
			
		<?php endforeach; ?>
	
	</div>

</div>