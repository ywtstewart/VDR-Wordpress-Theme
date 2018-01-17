<?php

// Register  Nav Walker class_alias
require_once('wp_bootstrap_navwalker.php');

//Theme support
function vdr_theme_setup(){
  // Featured image in posts.
  add_theme_support('post-thumbnails');

  //Nav menus
  register_nav_menus(array(
   'primary' => __('Primary Menu')
  ));

  add_theme_support('post-formats', array( 'aside', 'gallery'));
}

//Run function after theme setup.
add_action('after_setup_theme', 'vdr_theme_setup');

//Enqeuue JS Scripts
function vdr_enqueue_scripts(){


}

add_action('wp_enqueue_scripts','vdr_enqueue_scripts');

function vdr_enqueue_stylesheets() {
  enqueue_stylesheet('style', get_stylesheet_uri());

}

function vdr_required_stylesheets(){
  wp_enqueue_script( 'aos-js',  get_stylesheet_directory_uri() . '/inc/aos-master/dist/aos.js', false, false, true );
  wp_enqueue_script( 'boostrap-js', get_stylesheet_directory_uri() .'/inc/bootstrap/js/bootstrap.min.js', array('jquery'), false , true );
  wp_enqueue_style(   'bootstrap-css', get_stylesheet_directory_uri() .'/inc/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'aos-css', get_stylesheet_directory_uri() .'/inc/aos-master/dist/aos.css');
  wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() .'/inc/font-awesome-4.7.0/css/font-awesome.min.css');
  wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/build/js/script.js', array('jquery'), false, true );
  wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','vdr_required_stylesheets');



function set_excerpt_length(){
    return 15;
}

add_filter('excerpt_length', 'set_excerpt_length');

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function vdr_init_widgets($id){

    register_sidebar(array(
     'name'             => 'Sidebar',
        'id'            => 'sidebar',
        'description' => __( 'Main Blog Sidebar' ),
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'

    ));

    register_sidebar(array(
        'name'          => 'Contact 1',
        'id'            => 'sidebar-1',
        'description' => __( 'Contact area.' ),
        'before_widget' => '<div class="contact-form">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'          => 'Contact 2',
        'id'            => 'sidebar-2',
        'description' => __( 'Contact area.' ),
        'before_widget' => '<div class="contact-form">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

}

add_action('widgets_init',  'vdr_init_widgets');

add_action( 'dashboard_glance_items', 'cpad_at_glance_content_table_end' );
function cpad_at_glance_content_table_end() {
    $args = array(
        'public' => true,
        '_builtin' => false
    );
    $output = 'object';
    $operator = 'and';

    $post_types = get_post_types( $args, $output, $operator );
    foreach ( $post_types as $post_type ) {
        $num_posts = wp_count_posts( $post_type->name );
        $num = number_format_i18n( $num_posts->publish );
        $text = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $num_posts->publish ) );
        if ( current_user_can( 'edit_posts' ) ) {
            $output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a>';
            echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
        }
    }
}

require get_template_directory() . '/inc/customizer.php';

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}

function register_pll_strings(){

if(function_exists('pll_register_string')){

//Hero
pll_register_string('Hero Text', get_theme_mod( 'hero_text' ) , true);
pll_register_string('Hero Button 1 Text', get_theme_mod( 'hero_btn_1_text' ) , true);
pll_register_string('Hero Button 2 Text', get_theme_mod( 'hero_btn_2_text' ) , true);

//Over
pll_register_string('Over Heading', get_theme_mod( 'over_heading' ) , true);
pll_register_string('Over Text', get_theme_mod( 'over_text' ) , true);
pll_register_string('Over Button Text', get_theme_mod( 'over_btn_text' ) , true);

//Diensten
pll_register_string('Diensten Heading', get_theme_mod( 'diensten_heading' ) , true);
pll_register_string('Diensten Text', get_theme_mod( 'diensten_text' ) , true);
pll_register_string('Diensten Knop Text', get_theme_mod( 'diensten_btn_text' ) , true);
pll_register_string('Diensten Knop url', get_theme_mod( 'diensten_btn_url' ) , true);

//Brands
pll_register_string('Brands Heading', get_theme_mod( 'brands_heading' ) , true);
pll_register_string('Brands Text', get_theme_mod( 'brands_text' ) , true);

//Projects
	pll_register_string('Projects Heading', get_theme_mod( 'projects_heading' ) , true);
	pll_register_string('Projects Text', get_theme_mod( 'projects_text' ) , true);


//Vacatures
pll_register_string('Jobs Heading', get_theme_mod( 'jobs_heading' ) , true);
pll_register_string('Jobs Text', get_theme_mod( 'jobs_text' ) , true);

//Contact
pll_register_string('Contact Heading', get_theme_mod( 'contact_heading' ) , true);
pll_register_string('Contact Text', get_theme_mod( 'contact_text' ) , true);

//Footer
pll_register_string('Footer Copy', get_theme_mod( 'footer_copy' ) , true);
pll_register_string('Footer KVK', get_theme_mod( 'footer_kvk' ) , true);
pll_register_string('Footer Telnummer', get_theme_mod( 'footer_telnummer' ) , true);
pll_register_string('Footer Email', get_theme_mod( 'footer_email' ) , true);

pll_register_string('Modal Close', get_theme_mod( 'modal-btn-text' ) , true);
}

}

register_pll_strings();


?>
