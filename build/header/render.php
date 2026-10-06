<?php


$icon_slug = $attributes['icon'] ?? 'logo';
$icon_svg  = my_theme_get_icon( $icon_slug );

$wrapper_attributes = get_block_wrapper_attributes( [ 'class' => 'site-header' ] );
?>
<header <?php echo $wrapper_attributes; ?>>
	<div class="site-header__wrapper">
	<?php if ( $icon_svg ) : ?>
		<span class="site-header__logo">
			<?php echo $icon_svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted theme file, slug whitelisted. ?>
		</span>
	<?php endif; ?>
	<div class="site-header__overlay">
		<div class="site-header__toggle site-header__toggle--close">C</div>
		<div class="site-header__nav-container">
			<?php echo $content; ?>

		</div>
	</div>
	<div class="site-header__toggle site-header__toggle--open">H</div>
	</div>

</header>
