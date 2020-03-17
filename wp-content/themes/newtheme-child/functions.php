<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
			function theme_enqueue_styles() {
			wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
			}

			
			// Le code ci-dessus permet de récupérer le fichier css du parent.

add_action('init', 'themeperso_add_menu');
	function themeperso_add_menu(){register_nav_menu('footer_menu', 'Menu pied de page');}