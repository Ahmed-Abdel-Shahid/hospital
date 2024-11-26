
<?php

function supporttheme()

{

register_nav_menu("PrimaryLocation","Primary-Menu");
}
add_action('after_setup_theme', "supporttheme");


function hemesupport()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'hemesupport' );




function theme_widgets_init(){
    $args =[
        'name' => __('Sidebar'),
        'id'            => 'sidebar_widget',
		'description'   => __( 'Registring widget area' ),
'before_widget'	=> '<section id="someId">',
		'after_widget'	=> '<section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '<h2>',

    ];
    register_sidebar($args);
}
add_action( 'widgets_init', 'theme_widgets_init' );

?>