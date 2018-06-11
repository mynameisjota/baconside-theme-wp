<?php 

// INCLUDES
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/responsive-embed.php';
require get_template_directory() . '/inc/call_scripts.php';
require get_template_directory() . '/inc/theme_functions.php';
require get_template_directory() . '/inc/author_template.php';
require get_template_directory() . '/inc/wp_pagination_bs.php';
require get_template_directory() . '/inc/posts-relacionados.php';
require get_template_directory() . '/inc/index-pagination.php';
require get_template_directory() . '/inc/navbar.php';
require_once('inc/bootstrap-breadcrumb.php');

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'http://localhost/wordpress/wp-content/uploads/2018/05/17191434_1250105581748102_7602113597483094439_n.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}

//////////////////////////////////////////////////////////////////////////
///     Limita o título dos posts na quantidade de caracteres desejado  /////
////////////////////////////////////////////////////////////////////////
 
function title_limite($maximo) {
$title = get_the_title();
if ( strlen($title) > $maximo ) {
$continua = '...';
}
$title = mb_substr( $title, 0, $maximo, 'UTF-8' );
echo $title.$continua;
}
// para chamar a função use title_limite(20);


