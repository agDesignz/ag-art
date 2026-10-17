<?php
// This file is generated. Do not modify it manually.
return array(
	'footer' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/ag-art-footer',
		'version' => '0.1.0',
		'title' => 'AG Art Footer',
		'category' => 'theme',
		'icon' => 'smiley',
		'description' => 'Site Footer.',
		'example' => array(
			
		),
		'attributes' => array(
			'className' => array(
				'type' => 'string',
				'default' => 'site-footer'
			),
			'content' => array(
				'type' => 'string'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	),
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
			'logo' => array(
				'type' => 'string',
				'default' => 'logo'
			),
			'hamburger' => array(
				'type' => 'string',
				'default' => 'house-hamburger'
			),
			'close' => array(
				'type' => 'string',
				'default' => 'house-close'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	),
	'home-content' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/home-content',
		'version' => '0.1.0',
		'title' => 'AG Art Home Content',
		'category' => 'widgets',
		'icon' => 'insert',
		'description' => 'Home page content',
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
	'home-title' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/home-title',
		'version' => '0.1.0',
		'title' => 'AG Art Home Title',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Home page title',
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
	'main-section' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/main-section',
		'version' => '0.1.0',
		'title' => 'AGArt Main Section',
		'category' => 'theme',
		'icon' => 'menu-alt3',
		'description' => 'Adjustable Main Section.',
		'example' => array(
			
		),
		'attributes' => array(
			'padding' => array(
				'type' => 'boolean',
				'default' => true
			)
		),
		'supports' => array(
			'html' => false,
			'className' => true
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'site-nav' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/ag-nav',
		'version' => '0.1.0',
		'title' => 'AG Art Site Nav',
		'category' => 'theme',
		'icon' => 'smiley',
		'description' => 'Site Nav.',
		'example' => array(
			
		),
		'attributes' => array(
			'menuRef' => array(
				'type' => 'number'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'work-body' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/work-body',
		'version' => '0.1.0',
		'title' => 'Work Body',
		'category' => 'theme',
		'icon' => 'menu-alt3',
		'description' => 'Work Page Body',
		'example' => array(
			
		),
		'attributes' => array(
			'customClass' => array(
				'type' => 'string',
				'default' => 'body work-body'
			)
		),
		'supports' => array(
			'html' => false,
			'className' => true
		),
		'textdomain' => 'AG Art',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	)
);
