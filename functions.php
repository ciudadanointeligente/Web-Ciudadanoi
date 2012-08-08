<?php
/**
 *ciudadanoi functions patch
*/

//================SIDEBARS====================

if (function_exists('register_sidebar')) {  
  register_sidebar(array(
		'name'=> __( 'Home Panel de info', 'child-theme' ), 
        'id'   => 'infoboard',  
        'description'   => __('Area de acciones poner como máximo 3 widgets', 'child-theme' ),  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h3>',  
        'after_title'   => '</h3>'  
		
    ));  
	
	  register_sidebar(array(
		'name'=> __( 'Home Banner Hole', 'child-theme' ), 
        'id'   => 'home_banner_hole',  
        'description'   => __('Area de banners de la ultima app de fci el hoyo', 'child-theme' ),  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h3>',  
        'after_title'   => '</h3>'  
		
    ));  
	
	 register_sidebar(array(
		'name'=> __( 'Súmate Hole', 'child-theme' ), 
        'id'   => 'sumate_hole',  
        'description'   => __('Area de widgets de youtube, flickr y twitter TL en súmate', 'child-theme' ),  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h3>',  
        'after_title'   => '</h3>'  
		
    ));  
	
	register_sidebar(array(
		'name'=> __( 'Súmate Sociales', 'child-theme' ), 
        'id'   => 'sumate_sociales',  
        'description'   => __('Area de botones de redes sociales en súmate', 'child-theme' ),  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h3>',  
        'after_title'   => '</h3>'  
		
    ));  
	
	register_sidebar(array(
		'name'=> __( 'Han participado', 'child-theme' ), 
        'id'   => 'han-participado',  
        'description'   => __('Lista de ex-voluntarios, practicantes, amigos de la FCI, inteligentes todo, etc', 'child-theme' ),  
        'before_widget' => '<div id="%1$s" class="widget %2$s">',  
        'after_widget'  => '</div>',  
        'before_title'  => '<h3>',  
        'after_title'   => '</h3>'  
		
    ));  
	
	
}

//CUSTOM QUERY SHORTCODE

function custom_query_shortcode($atts) {

   // EXAMPLE USAGE:
   // [loop the_query="showposts=100&post_type=page&post_parent=453"]
   
   // Defaults
   extract(shortcode_atts(array(
      "the_query" => ''
   ), $atts));

   // de-funkify query
   $the_query = preg_replace('~&#x0*([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $the_query);
   $the_query = preg_replace('~&#0*([0-9]+);~e', 'chr(\\1)', $the_query);

   // query is made               
   query_posts($the_query);
   
   // Reset and setup variables
   $output = '';
   $temp_title = '';
   $temp_link = '';
   
   // the loop
   if (have_posts()) : while (have_posts()) : the_post();
   
      $temp_title = get_the_title($post->ID);
      $temp_link = get_permalink($post->ID);
      
      // output all findings - CUSTOMIZE TO YOUR LIKING
      $output .= "<li><a href='$temp_link'>$temp_title</a></li>";
          
   endwhile; else:
   
      $output .= "nothing found.";
      
   endif;
   
   wp_reset_query();
   return $output;
   
}
add_shortcode("loop", "custom_query_shortcode");



//--------- MENUS---------------------//

function register_my_menus() {
  register_nav_menus(
    array(
      'hacemos-menu' => __( 'Menú de lo que hacemos' ),
	  'somos-menu' => __( 'Menú Sobre nosotros' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



add_action('wp_head', 'my_register_jquery_function');
function my_register_jquery_function() {
wp_deregister_script('jquery');
wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '1.7.1');
wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_register_jquery_function');

wp_enqueue_script(
  'easing'
  , get_template_directory_uri() . '/../ciudadanoi/js/jquery.easing.1.3.js'
  , array('jquery')
);

wp_enqueue_script(
  'codaslider'
  , get_template_directory_uri() . '/../ciudadanoi/js/jquery.coda-slider-2.0.js'
  , array('jquery')
);

wp_enqueue_script(
  'codaslidertrigger'
  , get_template_directory_uri() . '/../ciudadanoi/js/codaslidertrigger.js'
  , array('jquery')
);

wp_enqueue_script(
  'jquery.masonry.min'
  , get_template_directory_uri() . '/../ciudadanoi/js/jquery.masonry.min.js'
  , array('jquery')
);


//===================improve menu output and allow descriptions
class My_Walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		if (strlen($item->description)>2) {
      $item_output .= '<br /><span class="sub">' . $item->description . '</span></a>';
} else {
     $item_output .= '</a>';
}
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


//strip sanitizers from menu description
remove_filter('nav_menu_description', 'strip_tags');

?>





