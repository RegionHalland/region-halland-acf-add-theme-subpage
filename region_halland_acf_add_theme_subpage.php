<?php

	/**
	 * @package Region Halland ACF Add Theme Subpage
	 */
	/*
	Plugin Name: Region Halland ACF Add Theme Subpage
	Description: Skapa en subsida till theme.php för extrafält
	Version: 1.3.1
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa funktion om ACF är installerad & aktiverad
	add_action('acf/init', 'region_halland_acf_add_theme_subpage');

	// Lägg till en tema-sida
	function region_halland_acf_add_theme_subpage() {

		// Om funktionen existerar
		if (function_exists('acf_add_options_sub_page')) {
			
			// Titel högst upp på tema-sidan
			$strPageTitle		= 'Temainställningar';

			// Titel i WP-admin sidebar
			$strMenuTitle		= 'Temainställningar';

			// Vad denna sidan ska vara knuten till, i detta fall "themes.php"
			$strParentSlug		= 'themes.php';

			// Vem som kan se sidan, i detta fall bara administratörer
			$strCapabillity		= 'administrator';

			// Om redirect = "false" kommer denna subsida att visas parallellt med förälder-sidan
			$strRedirect		= false;

			// Skapa subsida
			acf_add_options_sub_page(array(				
				'page_title'    => $strPageTitle,
				'menu_title'    => $strMenuTitle,
				'parent_slug'   => $strParentSlug,
				'capability'    => $strCapabillity,
				'redirect'      => $strRedirect			
			));

		}
	
	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_add_theme_subpage_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen av-aktiveras
	function region_halland_acf_add_theme_subpage_deactivate() {
		// Ingenting just nu...
	}

	// Aktivera pluginen och anropa metod
	register_activation_hook( __FILE__, 'region_halland_acf_add_theme_subpage_activate');

	// Av-aktivera pluginen och anropa metod
	register_deactivation_hook( __FILE__, 'region_halland_acf_add_theme_subpage_deactivate');

?>