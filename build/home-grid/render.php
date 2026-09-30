<?php
/**
 * Photo Grid – frontend render.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Inner content (unused).
 * @var WP_Block $block      Block instance.
 */

$images = is_array( $attributes['images'] ?? null ) ? $attributes['images'] : [];
$wrapper_attributes = get_block_wrapper_attributes( [ 'class' => 'home-grid' ] );
?>
<div <?php echo $wrapper_attributes; ?>>
	<?php
	for ( $i = 0; $i < 4; $i++ ) :
		$id = absint( $images[ $i ]['id'] ?? 0 );
		if ( ! $id ) {
			continue; // empty slot – but $i keeps class numbering stable
		}

		$img = wp_get_attachment_image( $id, 'large' );
		if ( ! $img ) {
			continue; // attachment was deleted
		}
		?>
		<figure class="home-grid__image home-grid__image--<?php echo esc_attr( $i + 1 ); ?>">
			<?php echo $img; // Already escaped by WP. ?>
		</figure>
	<?php endfor; ?>
</div>