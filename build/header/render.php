<?php


$logo_slug = $attributes['logo'] ?? 'logo';
$hamburger_slug = $attributes['hamburger'] ?? 'house-hamburger';
$close_slug = $attributes['close'] ?? 'house-close';
$logo_svg  = my_theme_get_icon( $logo_slug );
$hamburger_svg  = my_theme_get_icon( $hamburger_slug );
$close_svg = my_theme_get_icon( $close_slug);

$wrapper_attributes = get_block_wrapper_attributes( [ 'class' => 'site-header' ] );
?>
<header <?php echo $wrapper_attributes; ?>>
	<div class="site-header__wrapper">
		<?php if ( $logo_svg ) : ?>
			<a href="/" class="site-header__icon site-header__icon--logo">
				<?php echo $logo_svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted theme file, slug whitelisted. ?>
			</a>
		<?php endif; ?>
		<div class="site-header__overlay">
			<?php if ( $close_svg ) : ?>
			<button class="site-header__icon site-header__icon--close site-header__icon--toggle">
				<?php echo $close_svg ?>
			</button>
			<?php endif; ?>
			<div class="site-header__nav-container">
				<?php echo $content; ?>
				
			</div>
		</div>
		<?php if ($hamburger_svg) : ?>
		<button class="site-header__icon site-header__icon--open site-header__icon--toggle">
			<?php echo $hamburger_svg ?>
		</button>
		<?php endif; ?>
	</div>

</header>
