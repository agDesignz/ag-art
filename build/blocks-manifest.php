<?php
// This file is generated. Do not modify it manually.
return array(
	'header' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/ag-art-header',
		'version' => '0.1.0',
		'title' => 'AG Art Header',
		'category' => 'theme',
		'icon' => 'smiley',
		'description' => 'Site Header.',
		'example' => array(
			
		),
		'attributes' => array(
			'className' => array(
				'type' => 'string',
				'default' => 'site-header'
			),
			'icon' => array(
				'type' => 'string',
				'default' => 'logo'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	),
	'home-grid' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/home-grid',
		'title' => 'Home Grid',
		'category' => 'media',
		'icon' => 'format-gallery',
		'attributes' => array(
			'images' => array(
				'type' => 'array',
				'default' => array(
					array(
						'id' => 0
					),
					array(
						'id' => 0
					),
					array(
						'id' => 0
					),
					array(
						'id' => 0
					)
				)
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'logo' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/logo-svg',
		'version' => '0.1.0',
		'title' => 'AG Art Logo SVG',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Logo Icon',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'header',
		'editorScript' => 'file:./index.js'
	),
	'main-title' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/main-title',
		'version' => '0.1.0',
		'title' => 'AG Art Main Title',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Main main title',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
