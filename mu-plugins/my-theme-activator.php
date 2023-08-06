<?php
/*
Plugin Name: My Theme Activator
*/

// This function is used to set the active theme to 'main' on initial install
function set_active_theme_on_install() {

    if (!get_option('theme_activated')) {
        $active_theme_slug = 'main';

        update_option('stylesheet', $active_theme_slug);
        update_option('template', $active_theme_slug);

        update_option('theme_activated', true);
    }
}

set_active_theme_on_install();