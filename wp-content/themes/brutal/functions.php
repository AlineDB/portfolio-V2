<?php
//charger les fichiers nécessaires
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');

// Lancer la sessions PHP pour pouvoir passer des variables de page en page
add_action('init', 'dw_start_session', 1);

function dw_start_session()
{
    load_theme_textdomain('Aline-portfolio-brutal', __DIR__ . '/locales');
    if (! session_id()) {
        session_start();
    }
}

// Désactiver l'éditeur "Gutenberg" de Wordpress
add_filter('use_block_editor_for_post', '__return_false');

// Activer les images sur les articles
add_theme_support('post-thumbnails');

// Enregistrer un seul custom post-type pour "mes projets"
register_post_type('Projets', [
    'label' => 'Projets',
    'labels' => [
        'name' => 'Projets',
        'singular_name' => 'Projet',
    ],
    'description' => 'Tous mes projets web et design',
    'public' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-category',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'projets'],
]);

// Enregistrer un seul custom post-type pour "mes projets"
register_post_type('Autres', [
    'label' => 'Autres',
    'labels' => [
        'name' => 'Autres',
        'singular_name' => 'Autre',
    ],
    'description' => 'Tous mes autres projets',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-index-card',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'autres'],
]);


// Récupérer les projets via une requête Wordpress
function dw_get_projects($count = 20)
{
    // 1. on instancie l'objet WP_Query
    $projects = new WP_Query([
        'post_type' => 'Projets',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => $count,
    ]);

    // 2. on retourne l'objet WP_Query
    return $projects;
}

// Récupérer les autres projets via une requête Wordpress
function dw_get_othersProjects($count = 20)
{
    // 1. on instancie l'objet WP_Query
    $othersProjects = new WP_Query([
        'post_type' => 'Autres',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => $count,
    ]);

    // 2. on retourne l'objet WP_Query
    return $othersProjects;
}

//enregistrer les zones de menus
register_nav_menu('primary','Navigation principale (haut de page)');
register_nav_menu('footer','Navigation principale (pied de page)');

//fonction pour récupérer les éléments d'un menu sous forme d'un tableau d'objet
function dw_get_menu_items($location){
    $items = [];
    //récupérer le menu WP pour $location
    $locations = get_nav_menu_locations();
    if(!($locations[$location] ?? null)){//si dans locations il y a une clé location (si n'existe pas = null)
        return $items;
    }
    //récupérer tous les éléments du menu récupéré
    $menu = $locations[$location];
    $posts = wp_get_nav_menu_items($menu);

    //formater chaque élément dans une instance de classe personnalisée. Boucler sur chaque post pour transformer le WP_post en une instance
    //de notre classe perso et on va l'ajouter à $items sauf si sous menu à l'item parent
    foreach($posts as $post){
        $item = new PrimaryMenuItem($post);
        //retourner un tableau d'éléments du menu formaté
        $items[] = $item;
    }
    return $items;
}


// Fonction qui charge les assets compilés et retourne leure chemin absolu

function dw_mix($path)
{
    $path = '/' . ltrim($path, '/');

    if (!realpath(__DIR__ . '/public' . $path)) {
        return;
    }

    if (!($manifest = realpath(__DIR__ . '/public/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Ouvrir le fichier mix-manifest.json
    $manifest = json_decode(file_get_contents($manifest), true);

    // Regarder si on a une clef qui correspond au fichier chargé dans $path
    if (!array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Récupérer & retourner le chemin versionné
    return get_stylesheet_directory_uri() . '/public' . $manifest[$path];
}

//désactive l'éditeur de contenu dans les pages où les champs ACF sont définis


