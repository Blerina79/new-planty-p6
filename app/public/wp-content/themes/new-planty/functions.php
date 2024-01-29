<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Ajoute le style CSS du thème parent au thème enfant
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(),
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
}




// Cette fonction ajoute un lien "Admin" au menu WordPress si l'utilisateur est connecté.
function ajouter_lien_admin_menu( $items, $args ) {
    // Vérifie si l'utilisateur est connecté à WordPress.

    if ( is_user_logged_in() && 'menu-1' == $args->theme_location ){
            // Divise la chaîne des éléments de menu en un tableau.
            $items_array = explode('</li>', $items); {  
            
            // Code HTML du lien "Admin" à ajouter au menu.
            $admin_link = '<li class="menu-item"><a href="'.get_site_url().'/wp-admin/" class="admin-link">Admin</a></li>';
            
            // Insère le lien "Admin" à la deuxième position dans le menu.
            array_splice( $items_array, 1, 0, $admin_link );
            
            // Recolle les éléments du menu en une chaîne.
            $items = implode('</li>', $items_array);
        }
    }
    // Retourne la chaîne modifiée (ou non modifiée) des éléments de menu.
    return $items;
}

// Ajoute la fonction précédente à la file d'attente des filtres WordPress pour modifier les éléments de menu.
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );
