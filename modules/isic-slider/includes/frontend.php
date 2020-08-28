<div class="isicslider bxslider">

<?php for ( $i = 0; $i < count( $settings->slides ); $i++ ) : 
	
	if ( ! is_object( $settings->slides[ $i ] ) ) {
		continue;
	} else {
		$slide = $settings->slides[ $i ];
	}

	$image_attributes = wp_get_attachment_image_src( $slide->slide_background, 'full' )[0];
	
	?>
	
	<div class="isic-slide isic-slide-<?php echo $i; ?>" style="background-image: url(<?php echo $image_attributes; ?>);">
		<div class="isic-slide__inner">
			<div class="isic-slide__caption" style="border-color: <?php echo FLBuilderColor::hex_or_rgb( $slide->slide_color ); ?>;">
				<h2 class="isic-slide__heading"><?php echo $slide->slide_header; ?></h2>
				<p class="isic-slide__description"><?php echo $slide->slide_text; ?></p>
				<a href="#" class="isic-slide__description" style="color: <?php echo FLBuilderColor::hex_or_rgb( $slide->slide_color ); ?>;">Læs mere</a>
			</div>
		</div>
		<div class="isic-slide__tagline" style="background-color: <?php echo FLBuilderColor::hex_or_rgb( $slide->slide_color ); ?>;">Trusted Hardware Systems</div>
  </div>
	
<?php endfor; ?>

</div>