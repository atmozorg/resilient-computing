		<footer class="grid md:grid-cols-12">
			<div class="bg-orange text-white p-5 md:col-span-3">
				<?php wp_nav_menu( [
					'fallback_cb' => false,
					'menu' => 'footer',
					'walker' => new Resilient_Computing_Walker(),
					'menu_class' => 'text-shadow',
				] ); ?>
			</div>
			<div class="bg-black text-white p-5 md:col-span-9">
				<div class="md:flex md:items-center md:gap-4">
					<h2 class="!translate-y-0 !text-white text-[1.5rem]"><?php bloginfo( 'name' ); ?></h2>
					<div class="flex items-center gap-4">
						<div class="w-[25px] h-auto [&_.b]:fill-white &_.b]:stroke-black">
							<a href="mailto:info@resilient-computing.com">
							<img alt="email" width="25" height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/email.svg">
							</a>
						</div>
						<div class="w-[25px] h-auto [&_.b]:fill-black &_.b]:stroke-black">
							<a href="https://www.linkedin.com/company/resilient-computing/">
								<img alt="linkedin" width="24" height="15" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.svg">
							</a>
						</div>
					</div>
				</div>
				<p><?php the_address(); ?></p>
				<p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
			</div>
		</footer>
		<script>
			(function() {
				const TRANSLATE_CLASS = 'translate-y-5';
				let h2s = document.querySelectorAll("h2");
				h2s.forEach((h2) => {
					h2.classList.add(TRANSLATE_CLASS);
				})

				addEventListener("scroll", (event) => {
					h2s.forEach((h2) => {
						var viewportOffset = h2.getBoundingClientRect();
						if( viewportOffset.top > 500 ) {
							h2.classList.add(TRANSLATE_CLASS)
						}
						else {
							h2.classList.remove(TRANSLATE_CLASS);
						}
					})
				});

				const ACTIVE_CLASS = 'active';
				let dots = document.querySelectorAll(".dot");
				addEventListener("scroll", (event) => {
					dots.forEach((dot) => {
						var viewportOffset = dot.getBoundingClientRect();
						if( viewportOffset.top > 500 ) {
							dot.classList.remove(ACTIVE_CLASS);
						}
						else {
							dot.classList.add(ACTIVE_CLASS);
						}
					})
				});
			})();
		</script>
		<?php wp_footer(); ?>
	</body>
</html>
