<?php

add_action('init', function () {
	add_theme_support( 'post-thumbnails' );
	register_taxonomy_for_object_type('category', 'attachment');
});
