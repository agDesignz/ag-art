<?php

function ag_art_get_icon( string $slug ): string {

	$path = get_theme_file_path( "assets/icons/{$slug}.svg" );
	if ( ! is_readable( $path ) ) {
		return '';
	}

	$svg = file_get_contents( $path );
	return $svg ? $svg : '';
}