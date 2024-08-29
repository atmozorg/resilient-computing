<?php
$style = '';
$classes = [ 'text-white', 'relative', 'my-1' ];
if ( ! empty( $block[ 'style' ][ 'color' ][ 'background' ] ) ) {
	$bg = $block[ 'style' ][ 'color' ][ 'background' ];
	$style = " style='background-color:$bg'";
}
else {
	$classes[] = 'bg-black';
}
if( get_field( 'image' ) ) {
	$classes[] = 'md:min-h-[500px]';
}
?>

<div <?php echo $style; ?> class="<?php echo implode( ' ', $classes ); ?>">

	<div class="container relative py-10 z-10">

		<h2 class="text-center text-yellow"><?php echo get_field( 'heading' ); ?></h2>

		<div class="grid md:grid-cols-12 gap-4 <?php if( get_field( 'image' ) ) echo 'bg-black bg-opacity-50'; ?>">

			<?php foreach( get_field( 'counters' ) as $number => $item ) : ?>		

				<div class="md:col-span-4">

					<div class="w-full my-4 text-center">
						<div class="flex justify-center items-center mx-auto w-[75px] h-[75px] p-4 border border-orange rounded-full text-center">
							<span class="text-[1.5rem] md:text-xl text-yellow"><?php echo $number + 1; ?></span>
						</div>
					</div>
					
					<?php if( ! empty( $item[ 'content' ] ) ) : ?>

						<div class="text-center"><?php echo $item[ 'content' ]; ?></div>

					<?php endif; ?>
					
				</div>

			<?php endforeach; ?>
							
		</div>
			
	</div>

	<?php if( get_field( 'image' ) ) : ?>

	<?php acf_image( get_field( 'image' ), 'medium_large', [ 'class' => 'w-full h-[300px] object-cover' ] ); ?>

<?php endif; ?>

</div>