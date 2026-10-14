<?php
function mytheme_render_nav_items( array $blocks ): string {
	$html = '';
	foreach ( $blocks as $b ) {
		$attrs = $b['attrs'] ?? [];

		switch ( $b['blockName'] ) {
			case 'core/navigation-link':
			case 'core/navigation-submenu':
				// Prefer a live permalink over the stored URL, which can go stale
				$url = ( ( $attrs['kind'] ?? '' ) === 'post-type' && ! empty( $attrs['id'] ) )
					? get_permalink( $attrs['id'] )
					: ( $attrs['url'] ?? '#' );

				$label   = $attrs['label'] ?? '';
				$current = untrailingslashit( $url ) === untrailingslashit( home_url( add_query_arg( [] ) ) )
					? ' aria-current="page"' : '';
				$target  = ! empty( $attrs['opensInNewTab'] ) ? ' target="_blank" rel="noopener"' : '';

				$html .= '<li class="site-nav__item">';
				$html .= sprintf( '<a class="site-nav__link" href="%s"%s%s>%s</a>',
					esc_url( $url ), $current, $target, esc_html( $label ) );

				if ( ! empty( $b['innerBlocks'] ) ) {
					$html .= '<ul class="site-nav__sub">' . mytheme_render_nav_items( $b['innerBlocks'] ) . '</ul>';
				}
				$html .= '</li>';
				break;

			case 'core/page-list':
				// Dynamic block: nothing stored, so you query pages yourself
				foreach ( get_pages( [ 'sort_column' => 'menu_order,post_title' ] ) as $p ) {
					$html .= sprintf( '<li class="site-nav__item"><a class="site-nav__link" href="%s">%s</a></li>',
						esc_url( get_permalink( $p ) ), esc_html( get_the_title( $p ) ) );
				}
				break;
		}
	}
	return $html;
}

$menu = ! empty( $attributes['menuRef'] ) ? get_post( $attributes['menuRef'] ) : null;
if ( ! $menu || 'wp_navigation' !== $menu->post_type ) {
	return;
}
?>
<nav class="site-nav" aria-label="Main">
	<ul class="site-nav__list">
		<?php echo mytheme_render_nav_items( parse_blocks( $menu->post_content ) ); ?>
	</ul>
</nav>