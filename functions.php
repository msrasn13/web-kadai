<?php
//ウィジェット(サイドバー1)
//register_sidebar();

if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',

));
?>