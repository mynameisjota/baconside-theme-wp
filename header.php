<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta <?php bloginfo('charset'); ?>>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name');?> <?php wp_title('-'); ?> </title>   
  <?php wp_head (); ?>
</head>
<body <?php body_class(); ?>>

  <div class="jumbotron jumbotron-fluid preto-principal">
    <div class="container ">
      <div class="bacon-logo">
        <div class="d-flex justify-content-center">
          <a href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
        </div> 
      </div>
    </div>
  </div> 

  <!DOCTYPE html>
  <html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
      } else {
        bloginfo('name'); echo " - "; bloginfo('description');
      }
      ?>" />
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

      <nav class="navbar navbar-expand-md navbar-light vermelho-principal pb-0 pt-0">
        <div class="container">

          <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
           <!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 500 225" style="enable-background:new 0 0 500 225;" xml:space="preserve">
           <style type="text/css">
           .st0{fill:#FFFFFF;}
         </style>
         <g>
          <path class="st0" d="M217.3,129.4c-1.8-1.8-3.9-3.2-6.4-4.3c-2.5-1.1-5.1-1.6-7.8-1.6H158v0.1h45.1c0.1,0,0.1,0,0.2,0H158v39.7
          h45.1c2.7,0,5.3-0.5,7.8-1.6c2.5-1.1,4.6-2.5,6.4-4.3c1.8-1.8,3.2-3.9,4.3-6.3c1.1-2.4,1.6-5,1.6-7.9c0-2.7-0.5-5.2-1.6-7.7
          C220.4,133.2,219,131.1,217.3,129.4z"/>
          <path class="st0" d="M375.1,29.9C363,13.1,343,0.1,316,0.1c-9.2,0-17.9,1.3-26,4c-8.2,2.7-15.5,6.6-21.7,11.5
          c-6.4,5.1-11.6,11.3-15.3,18.5c-3.1-5.8-7.1-10.9-11.9-15.2c-5.4-4.8-11.8-8.6-18.9-11.2c-7.1-2.6-14.7-3.9-22.6-3.9h-97.3v26.2
          H0.9l70,159l31.3,0v32.5h101c8.4,0,16.5-1.4,24-4.3c7.7-2.9,14.4-7,20.2-12.2c2.9-2.6,5.5-5.5,7.7-8.6c3,4.3,6.5,8.1,10.6,11.5
          c6.5,5.5,14.2,9.8,22.9,12.7c8.5,2.9,21.6,4.4,31.3,4.4c33.1,0,56-18.2,67.2-36.1l43.7,0l68.7-159H375.1z M250.1,164
          c-2.7,5.7-6.3,10.7-10.9,14.9c-4.6,4.2-10,7.4-16.3,9.8c-6.2,2.3-12.8,3.5-19.8,3.5h-75.3v-32.4l0,0l-42.7,0L72.4,132l55.4,0h0
          v-8.4H69.1L56.3,94.5h71.5v-7.7H53.1L40.3,59h87.5l0,0V32.7h71.6c6.5,0,12.6,1.1,18.4,3.2c5.7,2.1,10.8,5.1,15.1,8.9
          c4.3,3.8,7.7,8.4,10.2,13.7c2.5,5.3,3.7,11.2,3.7,17.5c0,4.1-0.6,7.8-1.8,10.9c-1.2,3.2-2.7,6.1-4.5,8.6c-1.8,2.6-3.8,4.8-6,6.6
          c-2.2,1.8-4.4,3.4-6.5,4.7c3.1,1.4,6.2,3.3,9.4,5.5c3.1,2.3,5.9,5,8.3,8.2c2.4,3.2,4.4,6.8,6,10.8c1.6,4,2.3,8.6,2.3,13.7
          C254.1,152,252.8,158.3,250.1,164z M340.5,69.2c-1.5-2.4-3.4-4.5-5.9-6.2c-2.4-1.7-5.2-3.1-8.4-4.1c-3.2-1-6.6-1.5-10.1-1.5
          c-3.6,0-6.9,0.5-9.9,1.5c-3.1,1-5.7,2.3-8,3.9c-2.3,1.6-4.1,3.5-5.4,5.6c-1.4,2.1-2,4.4-2,6.8c0,3.7,1.5,7,4.6,9.8
          c3.1,2.8,6.9,4.9,11.4,6.2l11.4,3.1h126.1l-12.8,29.1h-61.6c1.2,1.8,2.2,3.8,3.1,5.7c0.4,0.9,0.8,1.8,1.1,2.7l54.1,0l-12.8,27.8
          l-40.9,0c-0.7,2.2-1.5,4.3-2.6,6.4c-3.1,6.1-7.3,11.4-12.7,15.8c-5.4,4.4-11.8,7.9-19.2,10.3c-7.4,2.5-15.3,3.7-23.9,3.7
          c-8.4,0-16.2-1.2-23.6-3.7c-7.3-2.5-13.7-6-19.1-10.6c-5.4-4.5-9.6-10-12.7-16.3c-3.1-6.3-4.6-13.4-4.6-21.2h29.2
          c0,3.4,0.9,6.5,2.6,9.4c1.7,2.8,4,5.3,6.8,7.4c2.8,2.1,6.1,3.7,9.8,4.9c3.7,1.2,7.5,1.8,11.5,1.8c4,0,7.7-0.6,11.3-1.7
          c3.6-1.1,6.6-2.7,9.2-4.7c2.6-2,4.6-4.3,6.1-6.9c1.5-2.6,2.2-5.4,2.2-8.4c0-4.5-1.7-8.6-5.2-12c-3.5-3.5-8.1-6-13.7-7.6l-26.6-7
          c-5.4-1.4-10.6-3.5-15.5-6.2c-4.9-2.7-9.2-5.9-12.8-9.6c-3.6-3.7-6.5-7.9-8.6-12.7c-2.1-4.8-3.2-9.9-3.2-15.5
          c0-6.8,1.5-13.1,4.5-18.9c3-5.8,7-10.7,12.1-14.7s11.1-7.2,18-9.5c6.9-2.3,14.3-3.4,22.3-3.4c7.8,0,15.1,1.2,21.8,3.5
          c6.7,2.3,12.6,5.6,17.7,9.9c5,4.3,9,9.3,11.9,15.2c0.2,0.4,0.4,0.9,0.6,1.4h92l-12.8,27.8H342.8v-9.6
          C342.8,74.3,342,71.7,340.5,69.2z"/>
          <path class="st0" d="M211,89.7c3.1-3.1,4.7-6.9,4.7-11.5c0-4.5-1.6-8.4-4.7-11.6c-3.1-3.2-6.9-4.8-11.5-4.8H158v32.5h41.5
          C204,94.4,207.9,92.8,211,89.7z"/>
          <path class="st0" d="M203.1,123.6H158v0h45.3C203.3,123.6,203.2,123.6,203.1,123.6z"/>
          <path class="st0" d="M203.1,123.6H158v0h45.3C203.3,123.6,203.2,123.6,203.1,123.6z"/>
          <rect x="158" y="123.6" class="st0" width="0" height="0"/>
          <rect x="158" y="123.6" class="st0" width="0" height="0"/>
          <rect x="158" y="123.6" class="st0" width="0" height="0"/>
        </g>
      </svg>

    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
      wp_nav_menu( array(
        'theme_location'  => 'navbar',
        'container'       => false,
        'menu_class'      => '',
        'fallback_cb'     => '__return_false',
        'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'           => 2,
        'walker'          => new b4st_walker_nav_menu()
      ) );
      ?>

      <!-- Search form -->
      <form class="form-inline ml-auto pt-2 pt-md-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input class="form-control mr-sm-1" type="text" value="<?php echo get_search_query(); ?>" placeholder="Procurar..." name="s" id="s">
      </form>
    </div>

  </div>
</nav>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1469402523383381';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>










