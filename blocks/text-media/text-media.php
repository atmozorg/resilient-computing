<div class="container grid md:grid-cols-12 gap-4">

	<InnerBlocks class="block md:col-span-9 py-4" />

	<div class="block md:col-span-3 md:pt-[6rem] py-4">

		<?php foreach( get_field( 'images' ) as $image ) : ?>

			<?php acf_image( $image[ 'image' ], 'medium', [ 'class' => 'mb-4' ] ); ?>

		<?php endforeach; ?>
	</div>

</div>