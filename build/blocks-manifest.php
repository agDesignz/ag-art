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
	'home-body' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/ag-art-home-body',
		'version' => '0.1.0',
		'title' => 'AG Art Home Body',
		'category' => 'theme',
		'icon' => 'menu-alt3',
		'description' => 'Home Page Body Section.',
		'example' => array(
			
		),
		'attributes' => array(
			'customClass' => array(
				'type' => 'string',
				'default' => 'home-body'
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
	'main-content' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/main-content',
		'version' => '0.1.0',
		'title' => 'AG Art Main Content',
		'category' => 'widgets',
		'icon' => 'insert',
		'description' => 'Main page content',
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
	),
	'main-title copy' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'agart-blocks/main-tagline',
		'version' => '0.1.0',
		'title' => 'AG Art Main Tagline',
		'category' => 'widgets',
		'icon' => 'insert',
		'description' => 'Main page tagline',
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
