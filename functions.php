<?php

function load_stylesheets() {
    wp_register_style("my-stylesheet", get_template_directory_uri() . "/style.css", array(), false, "all");
    wp_enqueue_style("my-stylesheet");
}

add_action("wp_enqueue_scripts", "load_stylesheets");

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

function load_javascripts() {
    wp_register_script("my-js", get_template_directory_uri() . "/assets/js/main.js", array(), null, true);
    wp_enqueue_script("my-js");
}

add_action("wp_enqueue_scripts", "load_javascripts");

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====


add_theme_support("menus");
add_theme_support("post-thumbnails"); // Featured image: edit post, right-hand side menu

register_nav_menus([
    "top-menu" => __("Top Menu", "theme"),
    "footer-menu" => __("Footer Menu", "theme")
]);

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

add_image_size("smallest", 300, 300, true);
add_image_size("largest", 800, 800, true);