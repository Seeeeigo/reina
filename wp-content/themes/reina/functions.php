<?php

function my_enqueue_styles() {
    // wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
  }
  add_action('wp_enqueue_scripts', 'my_enqueue_styles');



// function add_styles() {
//   wp_enqueue_style( 
//     'google-fonts_style'
//     ,'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap' 
//   );
// // リセットcss
//   wp_register_style(
//     'reset_style'
//     ,get_template_directory_uri() . '/css/reset.css', array()
//   );

  // ここからCSSの各ページへの分岐
//   $page = get_queried_object_id();
//   switch($page)
//   {
//     case get_option('page_on_front'):
//       wp_enqueue_style(
//         'home'
//         ,get_template_directory_uri() . '/css/home.css'
//         ,array('reset_style')
//       );
//       break;
//     case get_page_by_path('reina2')->ID:
//       wp_enqueue_style(
//         'reina2'
//         ,get_template_directory_uri() . '/css/reina2.css'
//         ,array('reset_style')
//       );
//       break;
//     // case get_page_by_path('pr02')->ID:
//     //   wp_enqueue_style(
//     //     'pr02'
//     //     ,get_template_directory_uri() . '/css/02.css'
//     //     ,array('reset_style')
//     //   );
//     //   break;
//     // case get_page_by_path('pr03')->ID:
//     //   wp_enqueue_style(
//     //     'pr03'
//     //     ,get_template_directory_uri() . '/css/03.css'
//     //     ,array('reset_style')
//     //   );
//     //   break;
//   }
// }
// add_action('wp_enqueue_scripts', 'add_styles');

?>