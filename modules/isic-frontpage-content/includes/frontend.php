<div class="mt-12 grid gap-5 max-w-none mx-auto md:grid-cols-2 lg:grid-cols-4 w-full">


<?php 

// WP_Query arguments
$args = array(
	'post_type'              => array( 'products' ),
	'posts_per_page'         => '2',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>

			<div class="flex flex-col rounded-lg shadow-lg border-solid border border-isic-light-blue overflow-hidden">
				<div class="flex-1 bg-white p-6 flex flex-col justify-between">
					<a href="<?php the_permalink(); ?>" class="hover:underline">
						<h3 class="m-0 text-xl leading-7">
							<?php the_title(); ?>
						</h3>
					</a>

					<p class="m-0 mt-3 text-sm leading-6">
						<?php 
							$excerpt = wp_strip_all_tags(get_the_excerpt());
							$excerpt = substr($excerpt, 0, 180);
							$result = substr($excerpt, 0, strrpos($excerpt, ' '));
							echo $result . "...";
						?>
					</p>

					<div class="flex-1">
						<img class="h-48 w-full object-contain" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" alt="">
					</div>

					<a href="<?php the_permalink(); ?>" class="flex items-center justify-end">
						<span class="mr-2">Læs mere</span>
						<span class="w-6 h-6 bg-isic-light-blue rounded-full text-white p-1">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
							</svg>
						</span>
					</a>
				</div>
			</div>
	<?php }
} else {
	?>
	<div class="flex flex-col rounded-lg shadow-lg border-solid border border-isic-light-blue overflow-hidden col-span-2">
		<div class="flex-1 bg-white p-6 flex flex-col justify-between">
			No products
		</div>
	</div>
	<?php
}

// Restore original Post Data
wp_reset_postdata();

?>
	
	
	<?php 

// WP_Query arguments
$args = array(
	'post_type'              => array( 'post' ),
	'posts_per_page'         => '2',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>

			<div class="flex flex-col rounded-lg shadow-lg border-solid border border-isic-light-blue overflow-hidden">
				<div class="flex-1 bg-white p-6 flex flex-col justify-between">
					<a href="<?php the_permalink(); ?>" class="hover:underline">
						<h3 class="m-0 text-lg leading-7">
							<?php the_title(); ?>
						</h3>
					</a>

					<p class="m-0 mt-3 text-sm leading-6 flex-1">
						<?php 
							$excerpt = wp_strip_all_tags(get_the_excerpt());
							$excerpt = substr($excerpt, 0, 250);
							$result = substr($excerpt, 0, strrpos($excerpt, ' '));
							echo $result . "...";
						?>
					</p>

					<a href="<?php the_permalink(); ?>" class="flex items-center justify-end">
						<span class="mr-2">Læs mere</span>
						<span class="w-6 h-6 bg-isic-light-blue rounded-full text-white p-1">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
							</svg>
						</span>
					</a>
				</div>
			</div>
	<?php }
} else {
	?>
	<div class="flex flex-col rounded-lg shadow-lg border-solid border border-isic-light-blue overflow-hidden col-span-2">
		<div class="flex-1 bg-white p-6 flex flex-col justify-between">
			No products
		</div>
	</div>
	<?php
}

// Restore original Post Data
wp_reset_postdata();

?>

</div>