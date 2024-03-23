<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
Function theme_enqueue_styles()
{
    wp_enqueue_style('parent_style', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css');
}
?> 

<?php


function add_admin_link_to_menu( $items, $args ) { //Récupére le lien vers le menu d'administration//
    if ( 'menu-1' === $args->theme_location && is_user_logged_in() ) { //vérifie si le menu en cours de modification est le menu principal 
    $admin_url = esc_url(admin_url()); // Échappement pour la sécurité
    $admin_link = '<li class="admin"><a href="' . $admin_url . '">Admin</a></li>';// Formate le lien avec une balise <a>
    $items_array = explode ( '</li>', $items); /*convertit la chaîne en tableau*/
    array_splice( $items_array, 1, 0, $admin_link ); // insère le lien "Admin" ($admin_link) dans le tableau $items_array à la deuxième position 
    //après le premier élément).//
    $items= implode ( '</li>', $items_array);
    }
    return $items;

}

add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );  // Insérèr le lien administrateur en deuxième position dans le tableau, //
//function callback: 10 est la priorité, 2 est le nombre d'arguments que la fonction de rappel attend//
 