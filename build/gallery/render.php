<?php
/**
 * Available here: $attributes (array), $content (string), $block (WP_Block)
 */

$drawings = new WP_Query( [
	'post_type'      => 'drawing',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'no_found_rows'  => true, // skips the pagination COUNT query: faster
] );

if ( ! $drawings->have_posts() ) {
	return;
}
?>
<div <?php echo get_block_wrapper_attributes( [ 'class' => 'drawing-gallery' ] ); ?>>
	<?php
	while ( $drawings->have_posts() ) :
		$drawings->the_post();

		$thumb_id = get_post_thumbnail_id();
		if ( ! $thumb_id ) {
			continue;
		}

		$full_url = wp_get_attachment_image_url( $thumb_id, 'full' );
		$alt      = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
		$desc     = get_the_excerpt();
		?>
		<button
			type="button"
			class="drawing-gallery__item"
			data-full="<?php echo esc_url( $full_url ); ?>"
			data-alt="<?php echo esc_attr( $alt ); ?>"
			data-description="<?php echo esc_attr( $desc ); ?>"
		>
			<?php
			// Adds srcset, sizes, width/height and loading="lazy" automatically.
			echo wp_get_attachment_image( $thumb_id, 'medium_large', false, [
				'class' => 'drawing-gallery__img',
			] );
			?>
		</button>
	<?php endwhile; wp_reset_postdata(); ?>

<dialog class="drawing-gallery__lightbox" aria-label="Image viewer">
	<div class="drawing-gallery__lightbox-inner">
		<button type="button" class="drawing-gallery__close" aria-label="Close">×</button>
		<img class="drawing-gallery__full" src="" alt="">
		<p class="drawing-gallery__caption"></p>
	</div>
</dialog>
</div>